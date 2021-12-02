<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProveedorResource extends JsonResource
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
            'id'        => $this->id, 
            'nombre'    => $this->name,
            'telefono'  => $this->phone,
            'direccion' => $this->address
        ];
    }

    public function with($request)
    {
        return [
            'ok' => true
        ];
    }
}
