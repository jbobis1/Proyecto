<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CircuitoRequest extends FormRequest
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
            'nombre' =>'required',
            'vueltas' =>'required',
            'kmsVuelta' => 'required',
            'fotoCircuit' =>'required',
            'Jornada' =>'required',
        ];
    }

    public function messages() {
        return[
            'nombre.required' => 'nombre es requerido',
            'vueltas.required' => 'vueltas es requerido',
            'kmsVuelta.required' => 'kmsVuelta es requerido',
            'fotoCircuit.required' =>'circuito es requerido' ,
            'Jornada.required' => 'jornada es requerida',
        ];
    }
}
