<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    protected $table='orderproducts';
    use HasFactory;
    public function Products(){
        $this->hasMany(Products::class,'products_id');
    }   
}
