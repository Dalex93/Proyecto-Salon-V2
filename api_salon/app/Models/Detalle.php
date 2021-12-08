<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function factura(){
        return $this->belongsTo(Factura::class);
    }

    public function servicio(){
        return $this->belongsTo(Servicio::class);
    }
}
