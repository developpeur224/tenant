<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id', 'logement_id', 'locataire_id', 'date_debut', 'date_fin', 'statut'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function logement()
    {
        return $this->belongsTo(Logement::class);
    }

    public function locataire()
    {
        return $this->belongsTo(Locataire::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}
