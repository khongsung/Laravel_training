<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required',
            'gender' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'vui lòng nhập họ tên!',
            'gender.required' => 'vui lòng chọn giới tính',
            'email.email' => 'vui lòng nhập đúng định dạng email',
            'email.required' => 'vui lòng nhập email',
            'email.unique' => 'email đã tồn tại',
            'password.required' => 'vui lòng nhập mật khẩu',
            'password.confirmed' => 'mật khẩu không khớp',
            'password.min' => 'mật khẩu phải trên 8 ký tự',
            'address.required' => 'vui lòng nhập địa chỉ',
            'phone.required' => 'vui lòng nhập số điện thoại',
            'phone.numeric' => 'số điện thoại không đúng định dạng' 
        ];
    }   
}
