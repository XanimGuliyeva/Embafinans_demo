<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category' => 'required|max:200|min:3|string',
            'about' => 'required|max:1000|min:5|string',
            'percent' => 'required|max:100|min:0|numeric'
        ];
    }

    public function messages(){
        return [
            'category.required'  => 'Kateqoriya adı daxil ediləyib!',
            'category.string'  => 'Kateqoriya adı yanlışdır!',
            'category.min'  => 'Kateqoriya adı çox qısadır!',
            'category.max'  => 'Kateqoriya adı çox uzundur!',

            'about.required'  => 'Qısa məzmun daxil ediləyib!',
            'about.string'  => 'Qısa məzmun yanlışdır!',
            'about.min'  => 'Qısa məzmun çox kiçikdir!',
            'about.max'  => 'Qısa məzmun çox böyükdür!',

            'percent.required'  => 'Faiz daxil ediləyib!',
            'percent.numeric'  => 'Faiz yanlışdır!',
            'percent.min'  => 'Faiz çox kiçikdir!',
            'percent.max'  => 'Faiz çox böyükdür!',
        ];
    }
}
