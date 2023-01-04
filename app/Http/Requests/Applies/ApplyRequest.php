<?php

namespace App\Http\Requests\Applies;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'name' => 'required|max:200|min:3|string',
            'surname' => 'required|string|max:200|min:4',
            'phone' => 'required|string|max:13|min:7',
            'email' => 'required|max:250|min:3|email',
            'cv' => 'required|max:100000|file'
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Ad daxil ediləyib!',
            'name.string'  => 'Ad yanlışdır!',
            'name.min'  => 'Ad çox qısadır!',
            'name.max'  => 'Ad çox uzundur!',

            'surname.required'  => 'Soyad daxil ediləyib!',
            'surname.string'  => 'Soyad yanlışdır!',
            'surname.min'  => 'Soyad çox qısadır!',
            'surname.max'  => 'Soyad çox uzundur!',

            'phone.required'  => 'Telefon nömrəsi daxil ediləyib!',
            'phone.string'  => 'Telefon nömrəsi yanlışdır!',
            'phone.min'  => 'Telefon nömrəsi çox qısadır!',
            'phone.max'  => 'Telefon nömrəsi çox uzundur!',

            'email.required'  => 'E-poçt ünvanı daxil ediləyib!',
            'email.email'  => 'E-poçt ünvanı yanlışdır!',
            'email.min'  => 'E-poçt ünvanı çox qısadır!',
            'email.max'  => 'E-poçt ünvanı çox uzundur!',

            'cv.required'  => 'CV daxil ediləyib!',
            'cv.file'  => 'CV yanlışdır!',
            'cv.max'  => 'CV çox böyükdür! (CV çox böyükdür MAX:100mb)'
        ];
    }
}
