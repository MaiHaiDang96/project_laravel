<?php

namespace App\Http\Requests\Admin\News;

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
            'name' => 'required|unique:newses,name',
            'content' => 'required:newses,content',

        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'News name not entered',
            'name.unique' => 'News name already exists',
            'content.required' => 'Content news not found'
        ];
    }
}
