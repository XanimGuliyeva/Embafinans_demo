<?php

namespace App\Http\Requests\Sup_Cat;

use Illuminate\Foundation\Http\FormRequest;

class Sup_CatRequest extends FormRequest
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
            'sup_category' => 'required|max:1000|min:3|string'
        ];
    }

    public function messages(){
        return [
            'sup_category.required'  => 'Kateqoriya daxil ediləyib!',
            'sup_category.string'  => 'Kateqoriya yanlışdır!',
            'sup_category.min'  => 'Kateqoriya çox qısadır!',
            'sup_category.max'  => 'Kateqoriya çox uzundur!'
        ];
    }
}
