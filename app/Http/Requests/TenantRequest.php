<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TenantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom'       => ['required', 'string', 'max:100'],
            'email'     => [
                'required',
                'email',
                'max:150',
                Rule::unique('tenants', 'email')->ignore($this->route('tenant'))
            ],
            'telephone' => ['required', 'string', 'max:20'],
            'adresse'   => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required'       => 'Le nom du tenant est obligatoire.',
            'nom.string'         => 'Le nom doit être une chaîne de caractères.',
            'nom.max'            => 'Le nom ne peut pas dépasser 100 caractères.',

            'email.required'     => 'L’adresse email est obligatoire.',
            'email.email'        => 'L’adresse email n’est pas valide.',
            'email.max'          => 'L’adresse email ne peut pas dépasser 150 caractères.',
            'email.unique'       => 'Cette adresse email est déjà utilisée par un autre tenant.',

            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.string'   => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'telephone.max'      => 'Le numéro de téléphone ne peut pas dépasser 20 caractères.',

            'adresse.string'     => 'L’adresse doit être une chaîne de caractères.',
            'adresse.max'        => 'L’adresse ne peut pas dépasser 255 caractères.',
        ];
    }
}
