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
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator as PaginationPaginator;

/**
  * Gera a paginação dos itens de um array ou collection.
  *
  * @param array|Collection      $items
  * @param int   $perPage
  * @param int  $page
  * @param array $options
  *
  * @return LengthAwarePaginator
  */
class CartController extends Controller
{

    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (PaginationPaginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
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
    
        

        
        foreach (session()->get('cart') as $ids=>$product){
        DB::insert('insert into orderproducts (orders_id, products_id,quantity_of_product) values (?, ?, ?)', [$order->id, $ids, $product['quantity'] ]);
        }
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
        $orders=orders::paginate(20);
        return view('layouts.order.manager',compact('orders'));
    }

    public function viewInformationOrder(Orders $orders)
    {
        $OrderWithRelationship=$orders::with('user','productInOrder','Products')->where('id', '=', $orders->id)->get();
        
        return view('layouts.order.viewInformation',compact('OrderWithRelationship'));

    }
}
