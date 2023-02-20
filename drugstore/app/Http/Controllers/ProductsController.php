<?php

namespace App\Http\Controllers;


use Symfony\Component\HttpFoundation\Session\Session;
use Carbon\Carbon;
use App\Models\Countrys;
use App\Models\Imgs;
use App\Models\Manufacturers;
use App\Models\ProductImg;
use App\Models\Products;
use App\Models\ProductType;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
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

class ProductsController extends Controller
{
    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (PaginationPaginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

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

    public function index(Request $request){
        $productTypes= ProductType::all();

        $search= $request->input('search') ?? "";
        if($search =="" and $request->input('role')==0){
            /* $products=Products::orderBy('quantity','DESC')->paginate(9); */
            $products=Products::paginate(9);

        }
        else{
            $products=Products::where('name','LIKE',"%$search%")->get()->paginate(9);
        }
        $cart= Cart::content();
        
        
        
        return view('layouts.products.index',compact('products','search','productTypes'));
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
    public function RemoveCart($id){
        $cart=session()->get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart',$cart);
        }
        return redirect()->route('cart')->with('success',"Xóa sản phẩm");

    }

    public function ChangeQuantityCart(Request $request,Products $products){
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

    public function ManagerProduct(){
        $products= Products::with('orderproducts','producttypes')->get()->paginate(10);


        return view('layouts.products.manager',compact('products'));
    }
    public function create(){
        $manufaturers= Manufacturers::all();
        $ProductTypes= ProductType::all();
        
        return view('layouts.products.create',compact('manufaturers','ProductTypes'));
    }
    public function store(Request $request){
        $ImgForShowing=$request->file('showimg');
        if($request->file('showimg') != ''){
            $path='product_img';
            $file_name=$ImgForShowing->getClientOriginalName();
            $ImgForShowing->storeAs('',$ImgForShowing->getClientOriginalName(),'productimg');
        }
        else{
            $file_name='';
        }
        DB::table('products')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'benefit' => $request->input('benefit'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'path'=>'product_img',
            'file_name'=>$file_name,
            'manufacturers_id'=>$request->input('manufacturers_id'),
            'role'=>$request->input('role'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect('managerproduct');
    }
    

    public function edit(Products $products){
        $countrys=Countrys::all();
        $ProductTypes= ProductType::all();
        $manufaturers= Manufacturers::all();

        return view('layouts.products.edit',compact('products','manufaturers','ProductTypes'));
        
    }

    public function update(Request $request, Products $products){
        

       
        $ImgForShowing=$request->file('showimg');
        
        
        $data=[
            'name'=>$request->input('name'),
            'prosuser'=>$request->input('prosuser'),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
            'benefit'=>$request->input('benefit'),
            'quantity'=>$request->input('quantity'),
            'manufacturers_id'=>$request->input('manufacturers_id'),
            'role'=>$request->input('role')


        ];
        if($request->file('showimg') != ''){
            $products->path='product_img';
            $products->file_name=$ImgForShowing->getClientOriginalName();
            $products->save();
            $ImgForShowing->storeAs('',$ImgForShowing->getClientOriginalName(),'productimg');
        }
        

        if($ProductImgs= $request->file('productimg')){
            foreach($ProductImgs as $ProductImg){
                $imgs=new Imgs;
                $imgs->path='product_img';
                $imgs->file_name=$ProductImg->getClientOriginalName();
                $imgs->products_id=$products->id;
                $imgs->save();
                $ProductImg->storeAs('',$ProductImg->getClientOriginalName(),'productimg');
            }
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

        $ProductWithRelationship=$products::with('imgs','countrys','manufacturers')->where('id', '=', $products->id)->get();  
        return view('layouts.products.proprofile',compact('ProductWithRelationship'));
    }

    
}
