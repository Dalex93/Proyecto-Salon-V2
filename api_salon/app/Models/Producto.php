<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function proveedor(){
        return $this->belongsTo(Supplier::class);
    }

    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
