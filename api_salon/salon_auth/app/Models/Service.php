<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo(Products::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}