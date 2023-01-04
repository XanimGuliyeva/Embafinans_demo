<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => ['required','string','min:1','max:300','unique:users,email'],
            'password' => ['required','string','min:8'],
            'fin' => ['required','string','min:7','max:7','unique:users,fin'],
            'phone' => ['required','string','min:10','max:10','unique:users,phone']
        ];
    }

    public function messages()
    {
        return [
            'email.required'  => 'Email daxil edilməyib!',
            'email.string'  => 'Email yanlışdır!',
            'email.min'  => 'Email çox qısadır! (1-300)',
            'email.max'  => 'Email çox uzundur! (1-300)',
            'email.unique'  => 'Bu email ilə qeydiyyat olunub!',

            'password.required'  => 'Şifrə daxil edilməyib!',
            'password.string'  => 'Şifrə yanlışdır!',
            'password.min'  => 'Şifrə çox qısadır! (Min: 8)',

            'fin.required'  => 'Fin kod daxil edilməyib!',
            'fin.string'  => 'Fin kod yanlışdır!',
            'fin.min'  => 'Fin kod 7 elementdən ibarət olmalıdır!',
            'fin.max'  => 'Fin kod 7 elementdən ibarət olmalıdır!',
            'fin.unique'  => 'Bu FİN ilə qeydiyyat olunub!',

            'phone.required'  => 'Telefon nömrəsi daxil edilməyib!',
            'phone.string'  => 'Telefon nömrəsi yanlışdır!',
            'phone.min'  => 'Telefon nömrəsi 10 elementdən ibarət olmalıdır!',
            'phone.max'  => 'Telefon nömrəsi 10 elementdən ibarət olmalıdır!',
            'phone.unique'  => 'Bu nömrə ilə qeydiyyat olunub!',
        ];
    }
}
