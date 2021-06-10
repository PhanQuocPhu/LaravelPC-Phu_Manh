<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAdmin extends FormRequest
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
            'name'=> 'required:admins,name,'.$this->id,
            'email'=> 'required|unique:admins,email,'.$this->id,
            'password'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Trường này không được để trống',
            'email.required' => 'Trường này không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Trường này không được để trống'
        ];
    }
}
