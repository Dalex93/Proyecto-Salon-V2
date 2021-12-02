<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceSingleResource extends JsonResource
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
            'id'       => $this->id,
            'servicio' => $this->name,
            'precio'   => $this->price,
            'duracion' => $this->duration,
            'producto' => $this->product_id,
            'empleado' => $this->employee_id
        ];
    }
}
