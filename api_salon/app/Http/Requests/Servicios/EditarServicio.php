<?php

namespace App\Http\Requests\Servicios;

use Illuminate\Foundation\Http\FormRequest;

class EditarServicio extends FormRequest
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
            'nombre' => 'nullable|string|min:2',
            'precio' => 'nullable',
            'duracion' => 'nullable',
            'product_id' => 'nullable|integer',
            'categoriaId' => 'nullable|integer',
            'empleado_id' => 'nullable|integer'
        ];
    }
}
