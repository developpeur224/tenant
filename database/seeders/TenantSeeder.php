<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenants = [
            [
                'nom' => 'ImmoPlus SARL',
                'email' => 'contact@immoplus.com',
                'telephone' => '+224622456789',
                'adresse' => 'Kaloum, Conakry, Guinée',
            ],
            [
                'nom' => 'Résidence Bellevue',
                'email' => 'info@residence-bellevue.com',
                'telephone' => '+224621112233',
                'adresse' => 'Kipé, Ratoma, Conakry, Guinée',
            ],
            [
                'nom' => 'Agence Alpha Immobilier',
                'email' => 'alpha.immo@gmail.com',
                'telephone' => '+224655997755',
                'adresse' => 'Dixinn, Conakry, Guinée',
            ],
            [
                'nom' => 'Société Horizon Location',
                'email' => 'contact@horizonloc.com',
                'telephone' => '+224666884422',
                'adresse' => 'Lambanyi, Conakry, Guinée',
            ],
            [
                'nom' => 'Villa Prestige Management',
                'email' => 'prestige@villa-management.com',
                'telephone' => '+224620334455',
                'adresse' => 'Nongo, Conakry, Guinée',
            ],
        ];

        foreach ($tenants as $tenant) {
            Tenant::create($tenant);
        }
    }
}
