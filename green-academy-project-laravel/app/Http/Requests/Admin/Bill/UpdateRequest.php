<?php

namespace App\Http\Requests\Admin\Skill;

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
            'billdetail' => 'required:bills,bill_detail_id,'. $this->route('id')
        ];
    }

    public function messages() 
    {
        return [
            'billdetail.required' => 'Bill detail item id not selected to pay',
        ];
    }
}
