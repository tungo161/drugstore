<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterReQuest;
use App\Mail\SendConfirmRegisterMail;
use App\Models\OrderProducts;
use App\Models\Orders;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Mail;
use Mai;

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


class AuthController extends Controller
{
    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (PaginationPaginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    
    public function showRegisterForm(){
        return view('layouts.auth.register');
    }

    public function showLoginForm(){
        return view('layouts.auth.login')->with('jsAlert', '');
    }
    public function register(RegisterReQuest $request){   
/*         Mail::to($request->input('email'))->send(new SendConfirmRegisterMail()); */
        $user=User::create($request->input());
        return redirect('login')->with('registersuccess','Tạo tài khoản thành công, hãy đăng nhập để tiếp tục');
    }
   
    public function ForgetPassword(){
        return view('mail.forget-password');
    }
    public function PostForgetPassword(){
        return view('mail.forget-password');
    }
    public function login(Request $request){
        
        if (Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
            ]))
            {
                if(Auth::user()->role !=1){
                    return redirect('');
                }
                else{
                    return redirect('admin');
                }
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
        return view('layouts.admin.manager-user-page',compact('users'));
    }

/*     public function delete($id){
        User::destroy($id);
        return redirect('managerusers');
    }
 */
    public function showProfileUser(){
        $user = Auth::user();
        return view('layouts.auth.profile',compact('user'));
    }

    public function updateProFile(Request $request)
    {
        $validated = $request->validate([
            'phone'=>'required|numeric',
            'address'=>'required|max:50',
            'name'=>'required'
        ],
        [
            'phone.numeric' => 'Số điện thoại phải là số',
            'name.required' => 'Tên không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'address.max' => 'Địa chỉ quá dài',
            'address.required' => 'Địa chỉ không được để trống',
        ]);
        $data=[
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
        ];
        Auth::user()->update($data);
        return redirect('profileuser');
    }

    public function ViewAuthOrder(User $users ){
        $auth = Auth::user();
        $orderCount=Orders::with('user')->where('users_id', '=', $users->id)->get()->paginate(6);
        return view('layouts.auth.viewOrders',compact('users','auth','orderCount'));
    }
    public function viewInformationOrder(User $users,Orders $orders)
    {
        $OrderWithRelationship=$orders::with('user','productInOrder','Products')->where('id', '=', $orders->id)->get();
        return view('layouts.auth.ViewInformationOrder',compact('OrderWithRelationship'));
    }
}
