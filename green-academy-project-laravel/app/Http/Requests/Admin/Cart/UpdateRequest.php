<?php

namespace App\Http\Requests\Admin\Cart;

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
            'user' => 'required:carts,user,',
            'item' => 'required:carts,item,'
        ];
    }

    public function messages() 
    {
        return [
            'user.required' => 'User not found',
            'item.required' => 'item not found'
        ];
    }
}
