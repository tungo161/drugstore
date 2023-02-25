<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ImgsController;
use App\Http\Controllers\PayPalController;
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
Route::get('managerproduct',[ProductsController::class,'ManagerProduct'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::post('managerproduct/store',[ProductsController::class,'store'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::get('managerproduct/{products}/edit',[ProductsController::class,'edit'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::get('managerproduct/create',[ProductsController::class,'create'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::post('managerproduct/store',[ProductsController::class,'store'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::put('managerproduct/{products}',[ProductsController::class,'update'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::delete('managerproduct/{id}',[ProductsController::class,'delete'])->middleware('LoginCheck')->middleware('TargetAccount');   


Route::get('delete/{id}',[ImgsController::class,'remove'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::get('products/{products}',[ProductsController::class,'productprofile']);
Route::get('cart',[ProductsController::class,'cart'])->name('cart');
Route::get('add_to_cart/{products}',[ProductsController::class,'addcart'])->name('addcart');
Route::get('remove/{id}',[ProductsController::class,'RemoveCart'])->name('removecart');
Route::get('ChangeQuantityCart/{products}',[ProductsController::class,'ChangeQuantityCart'])->name('changequantitycart');


Route::get('/register',[AuthController::class,'showRegisterForm'])->middleware('LogoutCheck');
Route::get('/login',[AuthController::class,'showLoginForm'])->middleware('LogoutCheck');
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);
Route::get('managerusers',[AuthController::class,'ManagerUser'])->middleware('LoginCheck')->middleware('TargetAccount');
Route::delete('managerusers/{id}',[AuthController::class,'delete'])->middleware('LoginCheck')->middleware('TargetAccount');   
Route::get('profileuser',[AuthController::class,'showProfileUser'])->middleware('LoginCheck');
Route::post('profileuser',[AuthController::class,'updateProfile'])->middleware('LoginCheck');
Route::get('profileuser/viewAllOrder/{users}',[AuthController::class,'ViewAuthOrder'])->middleware('LoginCartCheck');
Route::get('profileuser/viewAllOrder/{users}/viewInformation/{orders}',[AuthController::class,'viewInformationOrder'])->middleware('LoginCartCheck');



Route::get('cart/paycart',[CartController::class,'paycart'])->name('paycart')->middleware('LoginCartCheck');
Route::get('cart/paycartchoose',[CartController::class,'viewpaychoose'])->name('viewpaychoose')->middleware('LoginCartCheck');
Route::post('cart/paycartchoose',[CartController::class,'addInfomationtoCart'])->name('addpaychoose')->middleware('LoginCartCheck');
Route::get('managerorder',[CartController::class,'managerorder'])->name('managerorder')->middleware('LoginCheck')->middleware('TargetAccount');
Route::get('managerorder/viewInformationOrder/{orders}',[CartController::class,'viewInformationOrder'])->name('viewInformationOrder')->middleware('LoginCheck');
Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction')->middleware('LoginCartCheck');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction')->middleware('LoginCartCheck');
Route::post('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction')->middleware('LoginCartCheck');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction')->middleware('LoginCartCheck');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction')->middleware('LoginCartCheck');

Route::get('admin', [AdminController::class,'index'])->middleware('LoginCheck')->middleware('TargetAccount');