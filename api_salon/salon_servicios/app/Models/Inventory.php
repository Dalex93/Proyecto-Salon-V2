<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo(Products::class);
    }

    public function warehouse(){
        return $this->hasOne(Warehouse::class);
    }

}
