<?php

namespace App\Http\Requests\Credit;

use Illuminate\Foundation\Http\FormRequest;

class CreditRequest extends FormRequest
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
            'long_name' => 'required|max:1000|min:12|string',
            'email' => 'required|max:1000|min:3|email',
            'purpose' => 'required|max:1000|min:3|string',
            'amount' => 'required|max:100|min:1|string',
            'term' => 'required|max:100|min:1|string',
            'monthly_payment' => 'required|max:100|min:1|string',
            'organization' => 'required|max:250|min:1|string',
            'position' => 'required|max:250|min:1|string',
            'work_term' => 'required|max:2500|min:1|string',
            'monthly_salary' => 'required|max:100|min:1|string',
            'address' => 'required|max:250|min:1|string',
            'register_address' => 'required|max:250|min:1|string',
            'birthday' => 'required|max:100|min:1|string',
            'home_phone' => 'required|max:13|min:7|string',
            'mobile_phone' => 'required|max:13|min:7|string',
            'work_phone' => 'required|max:13|min:7|string'
        ];
    }

    public function messages(){
        return [
            'long_name.required'  => 'Ad, soyad və ata adı daxil ediləyib!',
            'long_name.string'  => 'Ad, soyad və ata adı yanlışdır!',
            'long_name.min'  => 'Ad, soyad və ata adı çox qısadır!',
            'long_name.max'  => 'Ad, soyad və ata adı çox uzundur!',

            'email.required'  => 'E-poçt ünvanı daxil ediləyib!',
            'email.email'  => 'E-poçt ünvanı yanlışdır!',
            'email.min'  => 'E-poçt ünvanı çox qısadır!',
            'email.max'  => 'E-poçt ünvanı çox uzundur!',

            'purpose.required'  => 'Kreditin məqsədi daxil ediləyib!',
            'purpose.string'  => 'Kreditin məqsədi yanlışdır!',
            'purpose.min'  => 'Kreditin məqsədi çox qısadır!',
            'purpose.max'  => 'Kreditin məqsədi çox uzundur!',

            'amount.required'  => 'Kreditin məbləği daxil ediləyib!',
            'amount.string'  => 'Kreditin məbləği yanlışdır!',
            'amount.min'  => 'Kreditin məbləği çox qısadır!',
            'amount.max'  => 'Kreditin məbləği çox uzundur!',

            'term.required'  => 'Kreditin müddəti daxil ediləyib!',
            'term.string'  => 'Kreditin müddəti yanlışdır!',
            'term.min'  => 'Kreditin müddəti çox qısadır!',
            'term.max'  => 'Kreditin müddəti çox uzundur!',

            'monthly_payment.required'  => 'Aylıq ödəniləcək məbləğ daxil ediləyib!',
            'monthly_payment.string'  => 'Aylıq ödəniləcək məbləğ yanlışdır!',
            'monthly_payment.min'  => 'Aylıq ödəniləcək məbləğ çox qısadır!',
            'monthly_payment.max'  => 'Aylıq ödəniləcək məbləğ çox uzundur!',

            'address.required'  => 'Faktiki ünvan daxil ediləyib!',
            'address.string'  => 'Faktiki ünvan yanlışdır!',
            'address.min'  => 'Faktiki ünvan çox qısadır!',
            'address.max'  => 'Faktiki ünvan çox uzundur!',

            'position.required'  => 'Vəzifə daxil ediləyib!',
            'position.string'  => 'Vəzifə yanlışdır!',
            'position.min'  => 'Vəzifə çox qısadır!',
            'position.max'  => 'Vəzifə çox uzundur!',

            'work_term.required'  => 'İş müddəti daxil ediləyib!',
            'work_term.string'  => 'İş müddəti yanlışdır!',
            'work_term.min'  => 'İş müddəti çox qısadır!',
            'work_term.max'  => 'İş müddəti çox uzundur!',

            'monthly_salary.required'  => 'Aylıq əmək haqqı daxil ediləyib!',
            'monthly_salary.string'  => 'Aylıq əmək haqqı yanlışdır!',
            'monthly_salary.min'  => 'Aylıq əmək haqqı çox qısadır!',
            'monthly_salary.max'  => 'Aylıq əmək haqqı çox uzundur!',

            'organization.required'  => 'Təşkilatı adı daxil ediləyib!',
            'organization.string'  => 'Təşkilatı adı yanlışdır!',
            'organization.min'  => 'Təşkilatı adı çox qısadır!',
            'organization.max'  => 'Təşkilatı adı çox uzundur!',

            'birthday.required'  => 'Doğum tarixi daxil ediləyib!',
            'birthday.string'  => 'Doğum tarixi yanlışdır!',
            'birthday.min'  => 'Doğum tarixi çox qısadır!',
            'birthday.max'  => 'Doğum tarixi çox uzundur!',

            'home_phone.required'  => 'Ev telefonu daxil ediləyib!',
            'home_phone.string'  => 'Ev telefonu yanlışdır!',
            'home_phone.min'  => 'Ev telefonu çox qısadır!',
            'home_phone.max'  => 'Ev telefonu çox uzundur!',

            'mobile_phone.required'  => 'Mobil telefon daxil ediləyib!',
            'mobile_phone.string'  => 'Mobil telefon yanlışdır!',
            'mobile_phone.min'  => 'Mobil telefon çox qısadır!',
            'mobile_phone.max'  => 'Mobil telefon çox uzundur!',

            'work_phone.required'  => 'İş telefonu daxil ediləyib!',
            'work_phone.string'  => 'İş telefonu yanlışdır!',
            'work_phone.min'  => 'İş telefonu çox qısadır!',
            'work_phone.max'  => 'İş telefonu çox uzundur!'
        ];
    }
}
