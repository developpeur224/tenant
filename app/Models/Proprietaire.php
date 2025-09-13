<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id', 'nom', 'prenom', 'tel', 'email', 'signature', 'cachet'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function logements()
    {
        return $this->belongsToMany(Logement::class, 'proprietaire_logement');
    }
}
