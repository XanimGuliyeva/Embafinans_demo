<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'mycontent' => 'required|max:100000|min:10|string',
            'employee' => 'required|max:1000000|min:10|numeric',
            'credit' => 'required|max:1000000|min:10|numeric',
            'portfolio' => 'required|max:1000000|min:10|numeric',
            'partner' => 'required|max:1000000|min:10|numeric',
        ];
    }
    public function messages(){
        return [
            'mycontent.required'  => 'Məzmun daxil ediləyib!',
            'mycontent.string'  => 'Məzmun yanlışdır!',
            'mycontent.min'  => 'Məzmun çox qısadır!',
            'mycontent.max'  => 'Məzmun çox uzundur!',

            'employee.required'  => 'Əməkdaş sayı daxil ediləyib!',
            'employee.numeric'  => 'Əməkdaş sayı yanlışdır!',
            'employee.min'  => 'Əməkdaş sayı çox kiçikdir!',
            'employee.max'  => 'Əməkdaş sayı çox böyükdür!',

            'credit.required'  => 'Kredit ərizəsi sayı daxil ediləyib!',
            'credit.numeric'  => 'Kredit ərizəsi sayı yanlışdır!',
            'credit.min'  => 'Kredit ərizəsi sayı çox kiçikdir!',
            'credit.max'  => 'Kredit ərizəsi sayı çox böyükdür!',

            'portfolio.required'  => 'İllik kredit portfeli daxil ediləyib!',
            'portfolio.numeric'  => 'İllik kredit portfeli yanlışdır!',
            'portfolio.min'  => 'İllik kredit portfeli çox kiçikdir!',
            'portfolio.max'  => 'İllik kredit portfeli çox böyükdür!',

            'partner.required'  => 'Partnyor sayı daxil ediləyib!',
            'partner.numeric'  => 'Partnyor sayı yanlışdır!',
            'partner.min'  => 'Partnyor sayı çox kiçikdir!',
            'partner.max'  => 'Partnyor sayı çox böyükdür!',

        ];
    }
}
