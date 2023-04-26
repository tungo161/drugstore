<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name'=>'required|max:50',
            'benefit'=>'max:255',
            'price'=>'required|integer',
            'quantity' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tối đa 50 ký tự',
            'benefit.max' => 'Tối đa 255 ký tự',
            'price.required' => 'Giá đơn sản phẩm không được để trống',
            'price.integer' => 'Giá sản phẩm phải là số',
            'quantity.integer' => 'Số lượng  sản phẩm phải là số',
            'quantity.required' => 'Số lượng sản phẩm không được để trống',
        ];
    }
}
