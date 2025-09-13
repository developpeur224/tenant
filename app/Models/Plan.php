<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prix', 'duree', 'nb_locataires_max', 
        'nb_logements_max', 'recommended', 'features'
    ];

    protected $casts = [
        'recommended' => 'boolean',
        'features' => 'array', 
    ];

    /**
     * Get the features attribute.
     */
    protected function features(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => is_array($value) ? $value : json_decode($value, true),
            set: fn ($value) => is_string($value) ? $value : json_encode($value)
        );
    }

    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }
}
