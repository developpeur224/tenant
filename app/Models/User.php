<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'tenant_id', 'nom', 'prenom', 'email', 'password', 'role', 'last_login'
    ];

    protected $hidden = ['password'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function proprietaire()
{
    return $this->hasOne(Proprietaire::class);
}

}
