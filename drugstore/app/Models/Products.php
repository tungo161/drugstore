<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;
    use HasFactory;
    protected $fillable = ['name', 'price','updated_at','benefit','quantity','description','manufacturers_id','path','file_name'];
    public function imgs()
    {
        return $this->hasMany(Imgs::class,'products_id');
    }   
    public function manufacturers()
    {
        return $this->belongsTo(Manufacturers::class,'manufacturers_id');
    }
    public function countrys()
    {
        return $this->belongsToThrough(Countrys::class, Manufacturers::class,'id','',[Countrys::class=>'countrys_id']);
    }
}
