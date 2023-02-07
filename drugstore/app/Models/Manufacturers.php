<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    protected $table='manufacturers';
    use HasFactory;
    public function countrys()
    {
        return $this->belongsTo(Countrys::class);
    }

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
