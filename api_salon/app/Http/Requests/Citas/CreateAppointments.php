<?php

namespace App\Http\Requests\Citas;

use Illuminate\Foundation\Http\FormRequest;

class CreateAppointments extends FormRequest
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
            'fecha'       => 'required|date',
            'hora'        => 'required|date',
            'correo'      => 'required|email',
            'noIdentidad' => 'required|string',
            'servicios'   => 'required|array',
            'servicios.*' => 'required|integer'
        ];
    }
}
