<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductSingleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'nombre'      => $this->name,
            'descripcion' => $this->description,
            'precio'      => $this->price,
            'marca'       => $this->mark,
            'categoria'   => $this->category_id,
            'proveedor'   => $this->supplier_id
        ];
    }
}
