<?php

namespace App\Http\Requests\Admin\Class;

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
            'name' => 'required|unique:classes,name',
            'skill' => 'required:classes,skill',
            'classstory' => 'required:classes,classstory',
            'image' => 'required:classes,image',
            'video' => 'required:classes,video'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'Class name not found',
            'name.unique' => 'Class name already exists',
            'skill.required' => 'Skill not found',
            'classstory.required' => 'Class story not found',
            'image.required' => 'Image class not found',
            'video.required' => 'Video class not found'
        ];
    }
}
