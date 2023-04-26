<?php

namespace App\Http\Controllers;

use App\Models\Countrys;
use App\Models\Manufacturers;
use App\Models\Orders;
use App\Models\Products;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $countrys= Countrys::with('products')->get();
        $products= Products::with('orderproducts','producttypes')->get();
        $productTypes= ProductType::with('products')->get();
        $manufacturers= Manufacturers::all();
        $orders= Orders::all();
        $users= User::all();
        return view('layouts.admin.home',compact('products','manufacturers','orders','users','countrys','productTypes'));
    }
    
}
