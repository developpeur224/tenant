<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Abonnement;
use App\Models\Tenant;
use App\Models\Plan;
use Carbon\Carbon;

class AbonnementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vérifier s'il y a des tenants et des plans
        if (Tenant::count() == 0) {
            $this->command->warn('Aucun tenant trouvé. Veuillez d\'abord créer des tenants.');
            return;
        }

        if (Plan::count() == 0) {
            $this->command->warn('Aucun plan trouvé. Veuillez d\'abord créer des plans.');
            return;
        }

        $abonnements = [
            [
                'tenant_id' => Tenant::inRandomOrder()->first()->id,
                'plan_id' => Plan::inRandomOrder()->first()->id,
                'date_debut' => Carbon::now()->subMonths(2),
                'date_fin' => Carbon::now()->addMonths(10),
                'statut' => 'actif',
                'mode_paiement' => 'Carte bancaire',
                'transaction_reference' => 'TRX-' . rand(100000, 999999),
            ],
            [
                'tenant_id' => Tenant::inRandomOrder()->first()->id,
                'plan_id' => Plan::inRandomOrder()->first()->id,
                'date_debut' => Carbon::now()->subMonth(),
                'date_fin' => Carbon::now()->addMonths(11),
                'statut' => 'actif',
                'mode_paiement' => 'Virement',
                'transaction_reference' => 'TRX-' . rand(100000, 999999),
            ],
            [
                'tenant_id' => Tenant::inRandomOrder()->first()->id,
                'plan_id' => Plan::inRandomOrder()->first()->id,
                'date_debut' => Carbon::now()->subDays(15),
                'date_fin' => Carbon::now()->addMonths(1),
                'statut' => 'en_attente',
                'mode_paiement' => null,
                'transaction_reference' => null,
            ],
            [
                'tenant_id' => Tenant::inRandomOrder()->first()->id,
                'plan_id' => Plan::inRandomOrder()->first()->id,
                'date_debut' => Carbon::now()->subMonths(6),
                'date_fin' => Carbon::now()->subDays(5),
                'statut' => 'expiré',
                'mode_paiement' => 'Orange Money',
                'transaction_reference' => 'TRX-' . rand(100000, 999999),
            ],
            [
                'tenant_id' => Tenant::inRandomOrder()->first()->id,
                'plan_id' => Plan::inRandomOrder()->first()->id,
                'date_debut' => Carbon::now()->subMonths(3),
                'date_fin' => Carbon::now()->addMonths(9),
                'statut' => 'suspendu',
                'mode_paiement' => 'Wave',
                'transaction_reference' => 'TRX-' . rand(100000, 999999),
            ]
        ];

        foreach ($abonnements as $abonnementData) {
            Abonnement::create($abonnementData);
        }

        $this->command->info('5 abonnements de test créés avec succès!');
    }
}