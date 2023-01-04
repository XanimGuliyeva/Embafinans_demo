<?php

namespace App\Http\Requests\Leader;

use Illuminate\Foundation\Http\FormRequest;

class LeaderRequest extends FormRequest
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
            'full_name' => 'required|max:1000|min:8|string',
            'position' => 'required|max:1000|min:3|string',
            'email_link' => 'required|max:1000|min:3|string',
            'linkedin_link' => 'required|max:1000|min:3|string',
            'category' => 'required|min:1|max:3|string',
            'profile' => 'required|max:50000|file'
        ];
    }

    public function messages(){
        return [
            'full_name.required'  => 'Rəhbərin adı, soyadı daxil ediləyib!',
            'full_name.string'  => 'Rəhbərin adı, soyadı yanlışdır!',
            'full_name.min'  => 'Rəhbərin adı, soyadı çox qısadır!',
            'full_name.max'  => 'Rəhbərin adı, soyadı çox uzundur!',

            'position.required'  => 'Vəzifə daxil ediləyib!',
            'position.string'  => 'Vəzifə yanlışdır!',
            'position.min'  => 'Vəzifə çox qısadır!',
            'position.max'  => 'Vəzifə çox uzundur!',

            'email_link.required'  => 'Email daxil ediləyib!',
            'email_link.string'  => 'Email yanlışdır!',
            'email_link.min'  => 'Email çox qısadır!',
            'email_link.max'  => 'Email çox uzundur!',

            'linkedin_link.required'  => 'Linkedin linki daxil ediləyib!',
            'linkedin_link.string'  => 'Linkedin linki yanlışdır!',
            'linkedin_link.min'  => 'Linkedin linki çox qısadır!',
            'linkedin_link.max'  => 'Linkedin linki çox uzundur!',

            'category.required'  => 'Kateqoriya daxil ediləyib!',
            'category.string'  => 'Kateqoriya yanlışdır!',
            'category.min'  => 'Kateqoriya daxil ediləyib!',
            'category.max'  => 'Kateqoriya daxil ediləyib!',

            'profile.required'  => 'Şəkil daxil ediləyib!',
            'profile.file'  => 'Şəkil yanlışdır!',
            'profile.max'  => 'Şəkil çox böyükdür! (Şəkil çox böyükdür MAX:50mb)'
        ];
    }
}
