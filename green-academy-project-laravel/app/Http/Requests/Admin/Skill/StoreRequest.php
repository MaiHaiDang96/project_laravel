<?php

namespace App\Http\Requests\Admin\Skill;

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
            'name' => 'required|unique:skills,name',
            'description' => 'required:skills,description',
            'image' => 'required:skills,image',
            'video' => 'required:skills,video'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'Skill name not entered',
            'name.unique' => 'Skill name already exists',
            'description.required' => 'Description skill not found',
            'image.required' => 'Image skill not found',
            'video.required' => 'Video skill not found'
        ];
    }
}
