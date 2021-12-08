<?php

namespace App\Http\Requests\Proveedores;

use Illuminate\Foundation\Http\FormRequest;

class CrearProveedor extends FormRequest
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
            'nombre'    => 'required|string|min:2',
            'telefono'  => 'required|string|min:8',
            'direccion' => 'required|string|min:2'
        ];
    }
}
