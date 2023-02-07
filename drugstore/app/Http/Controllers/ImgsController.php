<?php

namespace App\Http\Controllers;

use App\Models\Imgs;
use App\Models\Products;
use Illuminate\Http\Request;

class ImgsController extends Controller
{
    public function remove($id){
    $imgs= Imgs::find($id);     
    $imgs->delete();   
    return back()->withInput();
    }
}
