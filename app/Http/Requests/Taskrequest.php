<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Taskrequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire une requête. 
     */
    public function authorize(): bool
    {
        return true; // retourne vrai si l'utilisateur est autorisé à faire la requête
    }

    /**
     * Obtenir les règles de validation qui s'appliquent à la requête
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
