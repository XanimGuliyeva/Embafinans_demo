<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
            'new_category' => 'required|max:200|min:3|string',
            'new_about' => 'required|max:1000|min:5|string',
            'new_percent' => 'required|max:100|min:0|numeric'
        ];
    }

    public function messages(){
        return [
            'new_category.required'  => 'Kateqoriya adı daxil ediləyib!',
            'new_category.string'  => 'Kateqoriya adı yanlışdır!',
            'new_category.min'  => 'Kateqoriya adı çox qısadır!',
            'new_category.max'  => 'Kateqoriya adı çox uzundur!',

            'new_about.required'  => 'Qısa məzmun daxil ediləyib!',
            'new_about.string'  => 'Qısa məzmun yanlışdır!',
            'new_about.min'  => 'Qısa məzmun çox kiçikdir!',
            'new_about.max'  => 'Qısa məzmun çox böyükdür!',

            'new_percent.required'  => 'Faiz daxil ediləyib!',
            'new_percent.numeric'  => 'Faiz yanlışdır!',
            'new_percent.min'  => 'Faiz çox kiçikdir!',
            'new_percent.max'  => 'Faiz çox böyükdür!',
        ];
    }
}
