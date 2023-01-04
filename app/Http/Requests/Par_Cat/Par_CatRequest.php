<?php

namespace App\Http\Requests\Par_Cat;

use Illuminate\Foundation\Http\FormRequest;

class Par_CatRequest extends FormRequest
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
            'par_category' => 'required|max:1000|min:3|string'
        ];
    }

    public function messages(){
        return [
            'par_category.required'  => 'Kateqoriya daxil ediləyib!',
            'par_category.string'  => 'Kateqoriya yanlışdır!',
            'par_category.min'  => 'Kateqoriya çox qısadır!',
            'par_category.max'  => 'Kateqoriya çox uzundur!'
        ];
    }
}
