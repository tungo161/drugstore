<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Http\Requests\RegisterReQuest;
use App\Models\Order;
use App\Models\OrderProducts;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function paycart(Request $request,User $user)
    {   
        $money=session()->get('moneys');
        dd(session()->get('cart'),$money);
    }

    public function viewpaychoose()
    {
        $user = Auth::user();
        return view('layouts.products.paycartchose',compact('user'));  
    }
    public function addInfomationtoCart(CartRequest $request){

        $order=new Orders();
        $orderproducts=new OrderProducts();
        $user = Auth::user();

        $order->usernametake= $request->input('name');
        $order->users_id= $user->id;
        $order->price= session()->get('moneys');
        $order->phonefortake= $request->input('phone');
        $order->note= $request->input('note');

        $order->addressfortake=$request->input('address');
        $order->ordertypes_id= $request->input('ordertypes_id');


        $order->save();

        if($request->input('ordertypes_id')==1){
            User::where('id', $user->id)->decrement('account', $order->price);
        }
        foreach (session('cart') as $id => $products){
            Products::where('id', $id)->decrement('quantity', $products['quantity']);
            
        }
        session()->forget(['cart', 'moneys']);
        return redirect('cart');
    }
    public function managerorder(){

        $orders= Orders::with('user')->get();

        return view('layouts.order.manager',compact('orders'));
    }
}
