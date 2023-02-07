<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Countrys extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    protected $table='countrys';

    public function products()
    {
        return $this->hasManyThrough(Products::class, Manufacturers::class);
    }
    public function proimg()
    {
        return $this->hasManyDeep(Imgs::class,[Manufacturers::class,Products::class],['countrys_id','manufacturers_id']);
    }
    public function manufacturers()
    {
        return $this->hasMany(Manufacturers::class,'countrys_id');
    }
}
