<?php

namespace App\Services;

use App\Models\Abonnement;
use App\Models\HistoriqueRenouvellement;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbonnementRenouvellementService
{
    public function renouveler(Abonnement $abonnement, array $data)
    {
        return DB::transaction(function () use ($abonnement, $data) {
            // Calculer la nouvelle date de fin
            $ancienneDateFin = $abonnement->date_fin;
            $dureeMois = $data['duree_mois'];
            
            $nouvelleDateFin = $this->calculerNouvelleDateFin($abonnement, $dureeMois);
            // Mettre à jour l'abonnement
            $abonnement->update([
                'date_fin' => $nouvelleDateFin->format('Y-m-d'),
                'statut' => 'actif',
                'mode_paiement' => $data['mode_paiement'] ?? $abonnement->mode_paiement,
                'transaction_reference' => $data['reference_paiement'] ?? $abonnement->transaction_reference
            ]);

            // Enregistrer dans l'historique
            $historique = HistoriqueRenouvellement::create([
                'abonnement_id' => $abonnement->id,
                'date_renouvellement' => now(),
                'ancienne_date_fin' => $ancienneDateFin,
                'nouvelle_date_fin' => $nouvelleDateFin,
                'duree_ajoutee' => $dureeMois,
                'montant' => $data['montant'] ?? $this->calculerMontant($abonnement, $dureeMois),
                'mode_paiement' => $data['mode_paiement'] ?? $abonnement->mode_paiement,
                'reference_paiement' => $data['reference_paiement'] ?? $abonnement->transaction_reference,
                'notes' => $data['notes'] ?? null
            ]);

            return $historique;
        });
    }

    private function calculerNouvelleDateFin(Abonnement $abonnement, int $dureeMois): Carbon
    {
        // Si l'abonnement est encore actif, prolonger à partir de la date de fin
        if (Carbon::parse($abonnement->date_fin)->gt(now())) {
            return Carbon::parse($abonnement->date_fin)->copy()->addMonths($dureeMois);
        }
        
        // Si expiré, recommencer à partir d'aujourd'hui
        return now()->addMonths($dureeMois);
    }

    private function calculerMontant(Abonnement $abonnement, int $dureeMois): float
    {
        // Calcul basique : prix mensuel × nombre de mois
        $prixMensuel = $abonnement->plan->prix / ($abonnement->plan->duree / 30);
        return $prixMensuel * $dureeMois;
    }

    public function getHistorique(Abonnement $abonnement)
    {
        return $abonnement->historiqueRenouvellements()->get();
    }
}