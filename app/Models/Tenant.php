<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'adresse',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }

    public function proprietaires()
    {
        return $this->hasMany(Proprietaire::class);
    }

    public function locataires()
    {
        return $this->hasMany(Locataire::class);
    }

    public function logements()
    {
        return $this->hasMany(Logement::class);
    }
}
