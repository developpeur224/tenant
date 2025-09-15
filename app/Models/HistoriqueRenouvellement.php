<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueRenouvellement extends Model
{
    use HasFactory;

    protected $fillable = [
        'abonnement_id',
        'date_renouvellement',
        'ancienne_date_fin',
        'nouvelle_date_fin',
        'duree_ajoutee',
        'montant',
        'mode_paiement',
        'reference_paiement',
        'notes'
    ];

    protected $casts = [
        'date_renouvellement' => 'date',
        'ancienne_date_fin' => 'date',
        'nouvelle_date_fin' => 'date',
        'montant' => 'decimal:2'
    ];

    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class);
    }
}