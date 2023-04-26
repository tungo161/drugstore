<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table='orders';
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
    public function productInOrder()
    {
        return $this->hasMany(OrderProducts::class,'orders_id');
    }
    public function Products(){
        return $this->belongsToMany(Products::class, 'orderproducts', 'orders_id', 'products_id');
    }
    public function orderType()
    {
        return $this->belongsTo(OrderType::class,'ordertypes_id');
    }
}


