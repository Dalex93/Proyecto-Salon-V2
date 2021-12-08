<?php

namespace App\Http\Requests\Citas;

use Illuminate\Foundation\Http\FormRequest;

class CrearCita extends FormRequest
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
            'fecha' => 'required',
            'hora'  => 'required',
            'cliente' => 'required',
            'email' => 'required',
            'dni' => 'required',
            'servicios' => 'array',
            'servicios.*.servicioId' => 'integer',
            'servicios.*.cantidad' => 'integer'
        ];
    }
}
