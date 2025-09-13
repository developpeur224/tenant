<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id', 'type_id', 'adresse', 'description', 'prix_mensuel'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function type()
    {
        return $this->belongsTo(LogementType::class, 'type_id');
    }

    public function proprietaires()
    {
        return $this->belongsToMany(Proprietaire::class, 'proprietaire_logement');
    }

    public function contrats()
    {
        return $this->hasMany(ContratLocation::class);
    }
}
