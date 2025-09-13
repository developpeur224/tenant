<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id', 'contrat_id', 'mois', 'date_paiement', 'montant', 'mode_paiement', 'reference'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function contrat()
    {
        return $this->belongsTo(ContratLocation::class, 'contrat_id');
    }

    public function facture()
    {
        return $this->hasOne(Facture::class);
    }
}
