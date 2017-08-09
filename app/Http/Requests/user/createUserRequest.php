<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            'fullname' => 'required|min:5',
            'email' => 'email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'vui long nhap day du ho ten',
            'fullname.min' => 'ho ten phai it nhat 5 ki tu',
            
            'email' => 'vui long nhap dung dinh dang email',

            'password.required' => 'vui long nhap mat khau',
            'password.confirmed' => 'mat khau khong khop nhau'
        ];
    }
}
