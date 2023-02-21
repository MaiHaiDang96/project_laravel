<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'username' => 'required|unique:users,username,'. $this->route('id'),
            'password' => 'required|min:8,',
            'password' => 'confirmed',
            'password_confirmation' => 'required|min:8,',
            'email' => 'required|unique:users,email,'. $this->route('id')
        ];
    }

    public function messages() 
    {
        return [
            'username.required' => 'Enter your username',
            'username.unique' => 'Username already exists',
            'password.unique' => 'New password same as old password',
            'password.required' => 'Enter your password',
            'password_confirmation.required' => ' Password confirmation not found',
            'email.unique' => 'Email already exists',
            'email.required' => 'Enter your email'
        ];
    }
}
