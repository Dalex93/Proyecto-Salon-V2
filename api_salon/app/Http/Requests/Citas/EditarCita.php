<?php

namespace App\Http\Requests\Citas;

use Illuminate\Foundation\Http\FormRequest;

class EditarCita extends FormRequest
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
            'fecha' => 'nullable',
            'hora'  => 'nullable',
            'cliente' => 'nullable',
            'email' => 'nullable',
            'dni' => 'nullable',
            'servicios' => 'array',
            'servicios.*.servicioId' => 'integer',
            'servicios.*.cantidad' => 'integer'
        ];
    }
}
