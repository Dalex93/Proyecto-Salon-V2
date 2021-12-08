<?php

namespace App\Http\Requests\Empleados;

use Illuminate\Foundation\Http\FormRequest;

class EditarEmpleado extends FormRequest
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
            'nombre'           => 'nullable|string|min:2',
            'apellido'         => 'nullable|string|min:2',
            'salario'          => 'nullable',
            'posicion_trabajo' => 'nullable|string|min:2'
        ];
    }
}
