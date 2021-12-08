<?php

namespace App\Http\Requests\Productos;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarProducto extends FormRequest
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
            'nombre'      => 'nullable|string|min:2',
            'description' => 'nullable|string|min:2',
            'precio'      => 'nullable',
            'marca'       => 'string|nullable',
            'categoriaId' => 'nullable|integer',
            'supplierId'  => 'nullable|integer'
        ];
    }
}
