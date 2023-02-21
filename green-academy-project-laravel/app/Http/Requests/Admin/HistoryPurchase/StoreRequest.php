<?php

namespace App\Http\Requests\Admin\HistoryPurchase;

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
            'bill' => 'required:comments,bill_id'
        ];
    }

    public function messages() 
    {
        return [
            'bill.required' => 'Bill ID not found'
        ];
    }
}
