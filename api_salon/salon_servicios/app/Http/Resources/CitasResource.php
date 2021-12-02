<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CitasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this->date = Carbon::parse($this->date)->format('d/m/y');
        $this->hour = Carbon::parse($this->hour)->format('h:i A');

        return [
            'id' => $this->id,
            'fecha' => $this->date,
            'hora'  => $this->hour,
            'cliente' => new UserResource($this->user_id),
            'servicio' => new ServicioResource($this->service_id)
        ];
    }
}
