<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterReQuest;
use App\Models\OrderProducts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showRegisterForm(){

        return view('layouts.auth.register');
    }

    public function showLoginForm(){

        return view('layouts.auth.login')->with('jsAlert', '');
    }
    public function register(RegisterReQuest $request){   
        
        
        $user=User::create($request->input());

        //Set người dùng đăng nhập là người hiện tại
        Auth::login($user);
        return redirect('');
    }
    public function login(Request $request){
        
        if (Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
            ]))
            {
                return redirect('');
            }
        else{
            return view('layouts.auth.login')->with('jsAlert', 'Đăng nhập thất bại');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        session()->flush();
        return redirect('login');
    } 
    
    public function ManagerUser(){
        $users= new User();

        $users= $users::paginate(10);

        return view('layouts.auth.manager',compact('users'));
    }

    public function delete($id){
        User::destroy($id);
        return redirect('managerusers');
    }

    public function showProfileUser(){
        $user = Auth::user();
        return view('layouts.auth.profile',compact('user'));
    }

    public function updateProFile(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),

            
        ];
        Auth::user()->update($data);


        return redirect('profileuser');
    }

    /* public function ViewOrder(User $users){
        $users= User::join('orders','orders.users_id','=', 'users.id')->join('orderproducts','orders.id','=', 'orderproducts.orders_id')->join('products','orderproducts.products_id','=', 'products.id')->get();

        return view('layouts.order.viewInformation',compact('users'));
    } */
}
