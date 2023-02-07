<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ImgsController;
use App\Http\Controllers\ProductsController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('products',[ProductsController::class,'index']);
Route::get('managerproduct',[ProductsController::class,'manaproduct'])->middleware('LoginCheck');


Route::post('managerproduct/store',[ProductsController::class,'store'])->middleware('LoginCheck');
Route::get('managerproduct/{products}/edit',[ProductsController::class,'edit'])->middleware('LoginCheck');
Route::get('managerproduct/create',[ProductsController::class,'create'])->middleware('LoginCheck');
Route::post('managerproduct/store',[ProductsController::class,'store'])->middleware('LoginCheck');
Route::put('managerproduct/{products}',[ProductsController::class,'update'])->middleware('LoginCheck');
Route::delete('managerproduct/{id}',[ProductsController::class,'delete'])->middleware('LoginCheck');   

//Route::get('managerproduct/{products}/edit/editimg',[ImgsController::class,'edit'])->middleware('LoginCheck');
//Route::put('managerproduct/{products}',[ImgsController::class,'update'])->middleware('LoginCheck');

Route::get('delete/{id}',[ImgsController::class,'remove']);

Route::get('products/{products}',[ProductsController::class,'productprofile']);


Route::get('cart',[ProductsController::class,'cart'])->name('cart');
Route::get('add_to_cart/{products}',[ProductsController::class,'addcart'])->name('addcart');
Route::get('remove/{id}',[ProductsController::class,'removecart'])->name('removecart');

Route::get('changequantitycart/{products}',[ProductsController::class,'changequantitycart'])->name('changequantitycart');


Route::get('/register',[AuthController::class,'showRegisterForm'])->middleware('LogoutCheck');
Route::get('/login',[AuthController::class,'showLoginForm'])->middleware('LogoutCheck');
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);
Route::get('managerusers',[AuthController::class,'manauser'])->middleware('LoginCheck');
Route::delete('managerusers/{id}',[AuthController::class,'delete'])->middleware('LoginCheck');   
Route::get('profileuser',[AuthController::class,'showProfileUser'])->middleware('LoginCartCheck');
Route::post('profileuser',[AuthController::class,'updateProfile'])->middleware('LoginCartCheck');

Route::get('cart/paycart',[CartController::class,'paycart'])->name('paycart')->middleware('LoginCartCheck');

Route::get('cart/paycartchoose',[CartController::class,'viewpaychoose'])->name('viewpaychoose')->middleware('LoginCartCheck');
Route::post('cart/paycartchoose',[CartController::class,'addInfomationtoCart'])->name('addpaychoose')->middleware('LoginCartCheck');
Route::get('managerorder',[CartController::class,'managerorder'])->name('managerorder')->middleware('LoginCheck');

