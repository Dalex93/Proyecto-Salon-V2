<?php

namespace App\Http\Requests\Empleados;

use Illuminate\Foundation\Http\FormRequest;

class CrearEmpleado extends FormRequest
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
            'nombre'           => 'required|string|min:2',
            'apellido'         => 'required|string|min:2',
            'salario'          => 'required',
            'posicion_trabajo' => 'required|string|min:2'
        ];
    }
}
