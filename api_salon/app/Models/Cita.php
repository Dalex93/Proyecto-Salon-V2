<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function servicios(){
        return $this->belongsToMany(Servicio::class, 'citas_servicios');
    }

}
