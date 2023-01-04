<?php

namespace App\Http\Requests\ContactInfo;

use Illuminate\Foundation\Http\FormRequest;

class ContactInfoRequest extends FormRequest
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
            'address' => 'required|max:1000|min:5|string',
            'phone' => 'required|max:100|min:4|string',
            'fax' => 'required|max:40|min:4|string',
            'hotline' => 'required|max:20|min:4|string',
            'email' => 'required|max:250|min:7|email',
        ];
    }
    public function messages(){
        return [
            'address.required'  => 'Ünvan daxil ediləyib!',
            'address.string'  => 'Ünvan yanlışdır!',
            'address.min'  => 'Ünvan çox qısadır!',
            'address.max'  => 'Ünvan çox uzundur!',

            'phone.required'  => 'Telefon daxil ediləyib!',
            'phone.string'  => 'Telefon yanlışdır!',
            'phone.min'  => 'Telefon çox kiçikdir!',
            'phone.max'  => 'Telefon çox böyükdür!',

            'fax.required'  => 'Fax daxil ediləyib!',
            'fax.string'  => 'Fax yanlışdır!',
            'fax.min'  => 'Fax çox kiçikdir!',
            'fax.max'  => 'Fax çox böyükdür!',

            'hotline.required'  => 'Qaynar-xətt daxil ediləyib!',
            'hotline.string'  => 'Qaynar-xətt yanlışdır!',
            'hotline.min'  => 'Qaynar-xətt çox kiçikdir!',
            'hotline.max'  => 'Qaynar-xətt çox böyükdür!',

            'email.required'  => 'Email daxil ediləyib!',
            'email.email'  => 'Email yanlışdır!',
            'email.min'  => 'Email çox kiçikdir!',
            'email.max'  => 'Email çox böyükdür!',

        ];
    }
}
