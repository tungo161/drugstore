<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [ 'usernametake', 'users_id','price','phonefortake','note','ordertypes_id','addressfortake'];
        

}
