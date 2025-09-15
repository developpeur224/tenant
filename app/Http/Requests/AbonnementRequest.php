<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbonnementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'tenant_id' => 'required|exists:tenants,id',
            'plan_id' => 'required|exists:plans,id',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'mode_paiement' => 'nullable|string|max:255',
            'transaction_reference' => 'nullable|string|max:255'
        ];
    }
    
    public function messages()
    {
        return [
            'tenant_id.required' => 'Le locataire est obligatoire.',
            'plan_id.required' => 'Le plan est obligatoire.',
            'date_debut.required' => 'La date de début est obligatoire.',
            'date_fin.required' => 'La date de fin est obligatoire.',
            'date_fin.after' => 'La date de fin doit être après la date de début.',
        ];
    }
}