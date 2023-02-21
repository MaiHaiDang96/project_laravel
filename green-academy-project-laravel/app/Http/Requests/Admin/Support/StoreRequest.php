<?php

namespace App\Http\Requests\Admin\Support;

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
            'title' => 'required:supports,title',
            'question' => 'required:supports,question',
        ];
    }

    public function messages() 
    {
        return [
            'title.required' => 'Title question not found',
            'question.required' => 'Question not found'
        ];
    }
}
