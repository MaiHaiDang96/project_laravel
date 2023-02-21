<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users,username|min:8',
            'password' => 'required|confirmed|min:8',
            'email' => 'required|unique:users,email',
            'checkterm' =>'accepted'
        ];
    }

    public function messages() 
    {
        return [
            'username.required' => 'Enter your username',
            'username.unique' => 'Username already exists',
            'password.required' => 'Enter your password',
            'password.confirmed' => 'Confirm password not matched',
            'email.unique' => 'Email already exists',
            'email.required' => 'Enter your email',
            'checkterm.accepted' => 'You must checked term of service'
        ];
    }
}
