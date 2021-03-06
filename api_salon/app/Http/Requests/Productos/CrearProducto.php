<?php

namespace App\Http\Requests\Productos;

use Illuminate\Foundation\Http\FormRequest;

class CrearProducto extends FormRequest
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
            'nombre'      => 'required|string|min:2',
            'description' => 'nullable|string|min:2',
            'precio'      => 'required',
            'marca'       => 'string|nullable',
            'categoriaId' => 'required|integer',
            'supplierId'  => 'required|integer'
        ];
    }
}
