<?php

namespace App\Http\Requests\Career;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
            'city' => 'required|string|min:4',
            'deadline' => 'required|string',
            'mycontent' => 'required|max:100000|min:3|string'
        ];
    }

    public function messages(){
        return [
            'header.required'  => 'Başlıq daxil ediləyib!',
            'header.string'  => 'Başlıq yanlışdır!',
            'header.min'  => 'Başlıq çox qısadır!',
            'header.max'  => 'Başlıq çox uzundur!',

            'city.required'  => 'Şəhər daxil ediləyib!',
            'city.string'  => 'Şəhər yanlışdır!',
            'city.min'  => 'Şəhər daxil ediləyib!',

            'deadline.required'  => 'Son tarix daxil ediləyib!',
            'deadline.string'  => 'Son tarix yanlışdır!',

            'mycontent.required'  => 'Məzmun daxil ediləyib!',
            'mycontent.string'  => 'Məzmun yanlışdır!',
            'mycontent.min'  => 'Məzmun çox qısadır!',
            'mycontent.max'  => 'Məzmun çox uzundur!'
        ];
    }
}
