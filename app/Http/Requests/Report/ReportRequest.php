<?php

namespace App\Http\Requests\Report;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'name' => 'required|max:5000|min:3|string',
            'year' => 'required|max:5000|min:4|string',
            'report' => 'required|max:50000|file'
        ];
    }


    public function messages(){
        return [
            'name.required'  => 'Hesabat adı daxil ediləyib!',
            'name.string'  => 'Hesabat adı yanlışdır!',
            'name.min'  => 'Hesabat adı çox qısadır!',
            'name.max'  => 'Hesabat adı çox uzundur!',

            'year.required'  => 'Hesabat ili daxil ediləyib!',
            'year.string'  => 'Hesabat ili yanlışdır!',
            'year.min'  => 'Hesabat ili çox kiçikdir!',
            'year.max'  => 'Hesabat ili çox böyükdür!',

            'report.required'  => 'Hesabat daxil ediləyib!',
            'report.file'  => 'Hesabat yanlışdır!',
            'report.max'  => 'Hesabat çox böyükdür! (Fayl çox böyükdür MAX:50mb)'
        ];
    }
}
