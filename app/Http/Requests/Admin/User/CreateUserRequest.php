<?php

namespace App\Http\Requests\Admin\User;

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
            'fullname' => 'required|max:50',
            'email' => 'required|unique:users|email',
            'phone' => 'required|unique:users',
            'password' => 'required|min:5|max:15',
            'confirm' => 'required|same:password',
        ];
    }
}
