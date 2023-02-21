<?php

namespace App\Http\Requests\Admin\Class;

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
            'name' => 'required:classes,name,'. $this->route('id'),
            'name' => 'unique:classes,name,'. $this->route('id'),
            'skill' => 'required:classes,skill,'. $this->route('id'),
            'classstory' => 'required:classes,classstory'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'Class name not found',
            'name.unique' => 'Class name already exists',
            'skill.required' => 'Skill not found',
            'classstory.required' => 'Class story not found',

        ];
    }
}
