<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgs extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='imgs';
    protected $fillable = ['file_name', 'path', 'products_id'];
}
