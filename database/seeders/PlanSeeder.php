<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'nom' => 'Starter',
                'prix' => 100000,
                'duree' => 30,
                'nb_locataires_max' => 5,
                'nb_logements_max' => 3,
                'features' => json_encode([
                    ['name' => 'Support technique', 'value' => 'Basic'],
                    ['name' => 'Rapports mensuels', 'value' => 'Non'],
                    ['name' => 'Export de données', 'value' => 'PDF uniquement']
                ])
            ],
            [
                'nom' => 'Pro',
                'prix' => 300000,
                'duree' => 30,
                'nb_locataires_max' => 20,
                'nb_logements_max' => 10,
                'features' => json_encode([
                    ['name' => 'Support technique', 'value' => 'Prioritaire'],
                    ['name' => 'Rapports mensuels', 'value' => 'Oui'],
                    ['name' => 'Export de données', 'value' => 'PDF + Excel'],
                    ['name' => 'Notifications', 'value' => 'Email + SMS']
                ])
            ],
            [
                'nom' => 'Business',
                'prix' => 600000,
                'duree' => 30,
                'nb_locataires_max' => 50,
                'nb_logements_max' => 25,
                'features' => json_encode([
                    ['name' => 'Support technique', 'value' => '24/7'],
                    ['name' => 'Rapports mensuels', 'value' => 'Détaillés'],
                    ['name' => 'Export de données', 'value' => 'Tous formats'],
                    ['name' => 'Notifications', 'value' => 'Email + SMS + App'],
                    ['name' => 'API accès', 'value' => 'Limité'],
                    ['name' => 'Stockage documents', 'value' => '10GB']
                ])
            ],
            [
                'nom' => 'Enterprise',
                'prix' => 1000000,
                'duree' => 30,
                'nb_locataires_max' => 100,
                'nb_logements_max' => 50,
                'features' => json_encode([
                    ['name' => 'Support technique', 'value' => 'Dédié 24/7'],
                    ['name' => 'Rapports mensuels', 'value' => 'Personnalisés'],
                    ['name' => 'Export de données', 'value' => 'Tous formats + API'],
                    ['name' => 'Notifications', 'value' => 'Multi-canaux'],
                    ['name' => 'API accès', 'value' => 'Complet'],
                    ['name' => 'Stockage documents', 'value' => 'Illimité'],
                    ['name' => 'Formation', 'value' => 'Incluse'],
                    ['name' => 'Personnalisation', 'value' => 'Oui']
                ])
            ]
        ];

        foreach ($plans as $planData) {
            Plan::updateOrCreate(
                ['nom' => $planData['nom']], 
                $planData 
            );
        }

        $this->command->info('Plans d\'abonnement mis à jour avec succès!');
    }
}