<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'email' => 'required|min:3|max:50|unique:users, email,'.$this->id,
            'password' => 'required|min:6|max:16',
            'repassword' => 'required|min:6|max:16',
            'phone' => 'required|min:10|numeric',
            'address' => 'required',
            'role_id' => 'required|numeric',
        ];
    }
}
