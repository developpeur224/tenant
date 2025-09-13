<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id', 'nom', 'prenom', 'sexe', 'etat_civil', 'telephone', 'email'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function contrats()
    {
        return $this->hasMany(ContratLocation::class);
    }
}
