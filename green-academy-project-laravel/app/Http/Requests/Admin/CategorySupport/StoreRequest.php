<?php

namespace App\Http\Requests\Admin\CategorySupport;

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
            'name' => 'required|unique:categories_support,name',
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'Category support name not entered',
            'name.unique' => 'Category support name already exists'
        ];
    }
}
