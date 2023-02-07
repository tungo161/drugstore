<?php

namespace App\Http\Controllers;


use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Countrys;
use App\Models\Imgs;
use App\Models\Manufacturers;
use App\Models\ProductImg;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
class ProductsController extends Controller
{
    protected function getSessionData(Products $products){
        return [
            'name' => $products->name,
            'quantity'=>1,
            'price' => $products->price,
            'file_name' => $products->file_name,
        ];
    }

    protected function setSessionAndReturn($cart){
        session()->put('cart',$cart);
        return back()->withInput()->with('success',"Thêm sản phẩm");
        
    }

    public function index(){
        //$products=Products::with('imgs','manufacturers')->get()->paginate(9);
        $countrys=Countrys::with('proimg','products','manufacturers')->get();
        collect($countrys)->paginate(5);
        $products=Products::paginate(9);
        $cart= Cart::content();
        
        
        
        return view('layouts.products.index',compact('products'));
    }

    public function cart(){
        
        return view('layouts.products.cart');
        
    }

    public function addcart(Products $products){
        
        $cart=session()->get('cart');
        if(!$cart){
            $cart=[$products->id=>$this->getSessionData($products)];
            return $this->setSessionAndReturn($cart);

        }
        if(isset($cart[$products->id])){
            $cart[$products->id]['quantity']++;
            return $this->setSessionAndReturn($cart);
        }
        $cart[$products->id]=$this->getSessionData($products);
        return $this->setSessionAndReturn($cart);

    }
    public function removecart($id){
        $cart=session()->get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart',$cart);
        }
        return redirect()->route('cart')->with('success',"Xóa sản phẩm");

    }

    public function changequantitycart(Request $request,Products $products){
        $cart=session()->get('cart');
        if($request->change_to==='down'){
            if(isset($cart[$products->id])){
                if($cart[$products->id]['quantity']>1){
                    $cart[$products->id]['quantity']--;
                    return $this->setSessionAndReturn($cart);
                }
                else{
                    return $this->removecart($products->id);
                }
            }
        }
        else{
            if(isset($cart[$products->id])){
                $cart[$products->id]['quantity']++;
                return $this->setSessionAndReturn($cart);

            }
        }
    }

    public function manaproduct(){
        $products= new Products();
        $products= $products::paginate(10);

        return view('layouts.products.manager',compact('products'));
    }
    public function create(){
        $manufaturers= Manufacturers::all();
        return view('layouts.products.create',compact('manufaturers'));
    }
    public function store(Request $request){

        Products::create($request->input());
        return redirect('managerproduct');
    }
    

    public function edit(Products $products){
        $countrys=Countrys::all();
        
        $manufaturers= Manufacturers::all();

        return view('layouts.products.edit',compact('products','manufaturers'));
        
    }

    public function update(Request $request, Products $products){
        $imgs=new Imgs;
        $manufaturers= Manufacturers::all();
        $productimg= $request->file('productimg');
        
        $showimg=$request->file('showimg');
        
        
        $data=[
            'name'=>$request->input('name'),
            'prosuser'=>$request->input('prosuser'),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
            'benefit'=>$request->input('benefit'),
            'quantity'=>$request->input('quantity'),
            'manufacturers_id'=>$request->input('manufacturers_id'),


        ];
        if($request->file('showimg') != ''){
            $products->path='product_img';
            $products->file_name=$showimg->getClientOriginalName();
            $products->save();
            $showimg->storeAs('',$showimg->getClientOriginalName(),'productimg');
        }

        if($request->file('productimg') != ''){
            $imgs->path='product_img';
            $imgs->file_name=$productimg->getClientOriginalName();
            $imgs->products_id=$products->id;
            $imgs->save();
            $productimg->storeAs('',$productimg->getClientOriginalName(),'productimg');
        }
        
        $products->update($data);
       
        
        return back()->withInput();
    }

    public function delete($id){
        $deleted = DB::table('imgs')->where('products_id', '=', $id)->delete();
        Products::destroy($id);
        return redirect('mana-product');
    }

    public function productprofile(Products $products){

        $productss=$products::with('imgs','countrys','manufacturers')->where('id', '=', $products->id)->get();

        
        
        return view('layouts.products.proprofile',compact('productss'));
    }

    
}
