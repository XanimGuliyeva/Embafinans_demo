<?php

namespace App\Http\Requests\Supporters;

use Illuminate\Foundation\Http\FormRequest;

class EditSupportersRequest extends FormRequest
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
            'name' => 'required|max:1000|min:3|string',
            'city' => 'required|min:4|string',
            'address' => 'required|max:1000|min:3|string',
            'category' => 'required|max:4|string',
            'phone' => 'required|max:13|min:7|string',
            'about' => 'required|max:1000|min:4|string',
            'contact_person' => 'required|max:1000|min:4|string',
            'email' => 'required|max:1000|min:4|email',
            'website' => 'required|max:1000|min:4|string',
            'director' => 'required|max:1000|min:4|string',
            'contact_phone' => 'required|max:13|min:7|string',
            'image' => 'max:50000|file'
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Şirkətin adı daxil ediləyib!',
            'name.string'  => 'Şirkətin adı yanlışdır!',
            'name.min'  => 'Şirkətin adı çox qısadır!',
            'name.max'  => 'Şirkətin adı çox uzundur!',

            'city.required'  => 'Şəhər daxil ediləyib!',
            'city.string'  => 'Şəhər yanlışdır!',
            'city.min'  => 'Şəhər daxil ediləyib!',

            'category.required'  => 'Kateqoriya daxil ediləyib!',
            'category.string'  => 'Kateqoriya yanlışdır!',
            'category.min'  => 'Kateqoriya daxil ediləyib!',

            'address.required'  => 'Ünvan daxil ediləyib!',
            'address.string'  => 'Ünvan yanlışdır!',
            'address.min'  => 'Ünvan çox qısadır!',
            'address.max'  => 'Ünvan çox uzundur!',

            'phone.required'  => 'Telefon nömrəsi daxil ediləyib!',
            'phone.string'  => 'Telefon nömrəsi yanlışdır!',
            'phone.min'  => 'Telefon nömrəsi çox qısadır!',
            'phone.max'  => 'Telefon nömrəsi çox uzundur!',

            'about.required'  => 'Qıas məlumat daxil ediləyib!',
            'about.string'  => 'Qıas məlumat yanlışdır!',
            'about.min'  => 'Qıas məlumat çox qısadır!',
            'about.max'  => 'Qıas məlumat çox uzundur!',

            'contact_person.required'  => 'Əlaqə saxlanılacaq şəxs daxil ediləyib!',
            'contact_person.string'  => 'Əlaqə saxlanılacaq şəxs yanlışdır!',
            'contact_person.min'  => 'Əlaqə saxlanılacaq şəxs çox qısadır!',
            'contact_person.max'  => 'Əlaqə saxlanılacaq şəxs çox uzundur!',

            'email.required'  => 'E-poçt ünvanı daxil ediləyib!',
            'email.email'  => 'E-poçt ünvanı yanlışdır!',
            'email.min'  => 'E-poçt ünvanı çox qısadır!',
            'email.max'  => 'E-poçt ünvanı çox uzundur!',

            'website.required'  => 'Veb-sayt daxil ediləyib!',
            'website.string'  => 'Veb-sayt yanlışdır!',
            'website.min'  => 'Veb-sayt çox qısadır!',
            'website.max'  => 'Veb-sayt çox uzundur!',

            'director.required'  => 'Direktorun adı, soyadı, atasının adı daxil ediləyib!',
            'director.string'  => 'Direktorun adı, soyadı, atasının adı yanlışdır!',
            'director.min'  => 'Direktorun adı, soyadı, atasının adı çox qısadır!',
            'director.max'  => 'Direktorun adı, soyadı, atasının adı çox uzundur!',

            'contact_phone.required'  => 'Əlaqə saxlanılacaq nömrə daxil ediləyib!',
            'contact_phone.string'  => 'Əlaqə saxlanılacaq nömrə yanlışdır!',
            'contact_phone.min'  => 'Əlaqə saxlanılacaq nömrə çox qısadır!',
            'contact_phone.max'  => 'Əlaqə saxlanılacaq nömrə çox uzundur!',

            'image.file'  => 'Şəkil yanlışdır!',
            'image.max'  => 'Şəkil çox böyükdür! (MAX:50mb)'
        ];
    }
}
