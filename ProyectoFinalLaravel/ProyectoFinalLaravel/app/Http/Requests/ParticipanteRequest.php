<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' =>'between:4,20',
            'edad' =>'regex:/[1-9]{1}[5-9]{1}/',
            'personaje' => 'required',
        ];
    }

    public function messages() {
        return[
            'nombre.between' => 'nombre debe estar entre 4 y 20 caracteres',
            'edad.regex' => 'por favor,edad a partir de 15 años',
            'personaje.required' => 'personaje es necesario',
        ];
    }
}
