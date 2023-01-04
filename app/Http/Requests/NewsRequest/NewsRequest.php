<?php

namespace App\Http\Requests\NewsRequest;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'mycontent' => 'required|max:5000|min:10|string',
            'header' => 'required|max:300|min:5|string',
        ];
    }
    public function messages(){
        return [
            'mycontent.required'  => 'Məzmun daxil ediləyib!',
            'mycontent.string'  => 'Məzmun yanlışdır!',
            'mycontent.min'  => 'Məzmun çox qısadır!',
            'mycontent.max'  => 'Məzmun çox uzundur!',

            'header.required'  => 'Başlıq daxil ediləyib!',
            'header.string'  => 'Başlıq yanlışdır!',
            'header.min'  => 'Başlıq çox qısadır!',
            'header.max'  => 'Başlıq sayı çox uzundur!',
        ];
    }
}
