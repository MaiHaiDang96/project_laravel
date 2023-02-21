<?php

namespace App\Http\Requests\Admin\Item;

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
            'name' => 'required|unique:items,name',
            'price' => 'required:items,price',
            'description' => 'required:items,description',
            'image' => 'required:items,image',
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'Item name not entered',
            'name.unique' => 'Item name already exists',
            'price.required' => 'Price item not found',
            'description.required' => 'Item description not found',
            'image.required' => 'Image item not found'
        ];
    }
}
