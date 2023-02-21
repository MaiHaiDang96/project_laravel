<?php

namespace App\Http\Requests\Admin\Support;

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
            'title' => 'required:supports,title'. $this->route('id'),
            'question' => 'required:supports,question'. $this->route('id'),
            'answer' => 'required:supports,answer'
        ];
    }

    public function messages() 
    {
        return [
            'title.required' => 'Title question not found',
            'question.required' => 'Question not found',
            'answer.required' => 'Answer not found',
        ];
    }
}
