<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    
    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }

    public function citas(){
        return $this->belongsToMany(Cita::class, 'citas_servicios');
    }
}
