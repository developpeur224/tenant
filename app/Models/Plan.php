<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prix', 'duree', 'nb_utilisateurs_max', 'nb_logements_max', 'features'
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }
}
