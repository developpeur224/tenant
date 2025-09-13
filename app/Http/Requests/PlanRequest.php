<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Changez à true pour autoriser la validation
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $planId = $this->route('plan') ? $this->route('plan')->id : null;

        return [
            'nom' => 'required|string|max:255|unique:plans,nom,' . $planId,
            'prix' => 'required|numeric|min:0',
            'duree' => 'required|integer|min:1',
            'nb_locataires_max' => 'required|integer|min:1',
            'nb_logements_max' => 'required|integer|min:1',
            'recommended' => 'boolean',
            'features' => 'nullable|json',
            'features.*.name' => 'required_with:features|string|max:255',
            'features.*.value' => 'required_with:features|string|max:255'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom du plan est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'nom.unique' => 'Un plan avec ce nom existe déjà.',
            
            'prix.required' => 'Le prix est obligatoire.',
            'prix.numeric' => 'Le prix doit être un nombre.',
            'prix.min' => 'Le prix ne peut pas être négatif.',
            
            'duree.required' => 'La durée est obligatoire.',
            'duree.integer' => 'La durée doit être un nombre entier.',
            'duree.min' => 'La durée doit être d\'au moins 1 jour.',
            
            'nb_locataires_max.required' => 'Le nombre maximum de locataires est obligatoire.',
            'nb_locataires_max.integer' => 'Le nombre de locataires doit être un nombre entier.',
            'nb_locataires_max.min' => 'Il doit y avoir au moins 1 locataire.',
            
            'nb_logements_max.required' => 'Le nombre maximum de logements est obligatoire.',
            'nb_logements_max.integer' => 'Le nombre de logements doit être un nombre entier.',
            'nb_logements_max.min' => 'Il doit y avoir au moins 1 logement.',
            
            'recommended.boolean' => 'Le champ recommandé doit être vrai ou faux.',
            
            'features.array' => 'Les fonctionnalités doivent être un tableau.',
            
            'features.*.name.required_with' => 'Le nom de la fonctionnalité est obligatoire.',
            'features.*.name.string' => 'Le nom de la fonctionnalité doit être une chaîne de caractères.',
            'features.*.name.max' => 'Le nom de la fonctionnalité ne peut pas dépasser 255 caractères.',
            
            'features.*.value.required_with' => 'La valeur de la fonctionnalité est obligatoire.',
            'features.*.value.string' => 'La valeur de la fonctionnalité doit être une chaîne de caractères.',
            'features.*.value.max' => 'La valeur de la fonctionnalité ne peut pas dépasser 255 caractères.'
        ];
    }


    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        $features = array_filter($this->features, function($feature) {
            return !empty($feature['name']) && !empty($feature['value']);
            });
            if ($this->has('features')) {
            
            // Convertir en JSON string pour le stockage
            // Nettoyer les features vides avant la validation
            $this->merge([
                'features' => !empty($features) ? json_encode(array_values($features)) : null
            ]);
        }

        // S'assurer que recommended est un boolean
        $this->merge([
            'recommended' => (bool) $this->recommended
        ]);
    }
}