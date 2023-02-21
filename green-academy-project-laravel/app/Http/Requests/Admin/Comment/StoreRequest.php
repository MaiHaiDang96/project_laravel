<?php

namespace App\Http\Requests\Admin\Comment;

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
            'user' => 'required:comments,user_id',
            'content' => 'required:comments,content'
        ];
    }

    public function messages() 
    {
        return [
            'user.required' => 'User not found',
            'content.required' => 'Comment not found'
        ];
    }
}
