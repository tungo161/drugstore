<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterReQuest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'email'=>'required|unique:users,email',
            'name'=>'required',
            'password'=>'required',
            'phone'=>'required|numeric',
            'address'=>'required|max:50',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        
    }
    public function messages()
    {
        return [
            'email.unique'=>'email đã tồn tại',
            'name.required' => 'Tên không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.numeric' => 'Số điện thoại phải là số',
            'address.max' => 'Địa chỉ quá dài',
            'address.required' => 'Địa chỉ không được để trống',
            'password.confirmed'=>'Xác nhận mật khẩu chưa chính xác',
            'password_confirmation.required'=>'Xác nhận mật khẩu không được bỏ trống'
        ];
    }
}
