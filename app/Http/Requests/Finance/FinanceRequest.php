<?php

namespace App\Http\Requests\Finance;

use Illuminate\Foundation\Http\FormRequest;

class FinanceRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'header' => 'required|max:200|min:3|string',
            'mycontent' => 'required|max:5000|min:10|string',
        ];
    }
    public function messages()
    {
        return [
            'header.required' => 'Başlıq daxil ediləyib!',
            'header.string' => 'Başlıq yanlışdır!',
            'header.min' => 'Başlıq çox qısadır!',
            'header.max' => 'Başlıq çox uzundur!',

            'mycontent.required' => 'Məzmun daxil ediləyib!',
            'mycontent.string' => 'Məzmun yanlışdır!',
            'mycontent.min' => 'Məzmun çox qısadır!',
            'mycontent.max' => 'Məzmun çox uzundur!'
        ];
    }
}
