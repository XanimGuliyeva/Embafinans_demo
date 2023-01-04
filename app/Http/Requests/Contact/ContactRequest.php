<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name_surname' => 'required|max:1000|min:12|string',
            'email' => 'required|max:1000|min:3|email',
            'message' => 'required|max:1000|min:3|string'
        ];
    }

    public function messages(){
        return [
            'name_surname.required'  => 'Adınız və soyadınız daxil ediləyib!',
            'name_surname.string'  => 'Adınız və soyadınız yanlışdır!',
            'name_surname.min'  => 'Adınız və soyadınız çox qısadır!',
            'name_surname.max'  => 'Adınız və soyadınız çox uzundur!',

            'email.required'  => 'E-poçt ünvanı daxil ediləyib!',
            'email.email'  => 'E-poçt ünvanı yanlışdır!',
            'email.min'  => 'E-poçt ünvanı çox qısadır!',
            'email.max'  => 'E-poçt ünvanı çox uzundur!',

            'message.required'  => 'Müraciət daxil ediləyib!',
            'message.string'  => 'Müraciət yanlışdır!',
            'message.min'  => 'Müraciət çox qısadır!',
            'message.max'  => 'Müraciət çox uzundur!'
        ];
    }
}
