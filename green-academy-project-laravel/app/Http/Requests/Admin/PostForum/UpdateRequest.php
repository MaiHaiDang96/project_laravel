<?php

namespace App\Http\Requests\Admin\PostForum;

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
            // 'title' => 'required:posts_forum,title,'. $this->route('id'),
            // 'content' => 'required:posts_forum,content,'. $this->route('id')
        ];
    }

    public function messages() 
    {
        return [
            // 'title.required' => 'Title not entered',
            // 'content.required' => 'Content not entered'
        ];
    }
}
