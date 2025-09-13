<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id', 'paiement_id', 'numero_facture', 'date_facture', 'fichier_pdf'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function paiement()
    {
        return $this->belongsTo(Paiement::class);
    }
}
