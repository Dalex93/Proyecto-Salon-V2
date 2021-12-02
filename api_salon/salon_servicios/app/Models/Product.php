<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'mark',
        'category_id',
        'supplier_id'
    ]; 

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function inventory(){
        return $this->hasMany(Inventory::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }

}
