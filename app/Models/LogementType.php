<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogementType extends Model
{
    use HasFactory;

    protected $fillable = ['tenant_id', 'libelle'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function logements()
    {
        return $this->hasMany(Logement::class, 'type_id');
    }
}
