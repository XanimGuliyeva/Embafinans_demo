<?php

namespace App\Http\Requests\Report;

use Illuminate\Foundation\Http\FormRequest;

class EditReportRequest extends FormRequest
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
            'new_name' => 'required|max:5000|min:3|string',
            'new_year' => 'required|max:5000|min:4|string'
        ];
    }

    public function messages()
    {
        return [
            'new_name.required'  => 'Hesabat adı daxil ediləyib!',
            'new_name.string'  => 'Hesabat adı yanlışdır!',
            'new_name.min'  => 'Hesabat adı çox qısadır!',
            'new_name.max'  => 'Hesabat adı çox uzundur!',

            'new_year.required'  => 'Hesabat ili daxil ediləyib!',
            'new_year.string'  => 'Hesabat ili yanlışdır!',
            'new_year.min'  => 'Hesabat ili çox kiçikdir!',
            'new_year.max'  => 'Hesabat ili çox böyükdür!'
        ];
    }
}
