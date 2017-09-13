<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|unique:categories,name',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'vui lòng nhập tên danh mục',
            'name.unique' => 'danh mục đã tồn tại',
            'status.required' => 'vui lòng chọn trạng thái danh mục'
        ];
    }
}
