<?php

namespace App\Http\Requests\Leader;

use Illuminate\Foundation\Http\FormRequest;

class EditLeaderRequest extends FormRequest
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
            'new_full_name' => 'required|max:1000|min:8|string',
            'new_position' => 'required|max:1000|min:3|string',
            'new_email_link' => 'required|max:1000|min:3|string',
            'new_linkedin_link' => 'required|max:1000|min:3|string',
            'new_category' => 'required|max:3|min:1|string',
            'new_profile' => 'max:50000|file'
        ];
    }

    public function messages(){
        return [
            'new_full_name.required'  => 'Rəhbərin adı, soyadı daxil ediləyib!',
            'new_full_name.string'  => 'Rəhbərin adı, soyadı yanlışdır!',
            'new_full_name.min'  => 'Rəhbərin adı, soyadı çox qısadır!',
            'new_full_name.max'  => 'Rəhbərin adı, soyadı çox uzundur!',

            'new_position.required'  => 'Vəzifə daxil ediləyib!',
            'new_position.string'  => 'Vəzifə yanlışdır!',
            'new_position.min'  => 'Vəzifə çox qısadır!',
            'new_position.max'  => 'Vəzifə çox uzundur!',

            'new_email_link.required'  => 'Email daxil ediləyib!',
            'new_email_link.string'  => 'Email yanlışdır!',
            'new_email_link.min'  => 'Email çox qısadır!',
            'new_email_link.max'  => 'Email çox uzundur!',

            'new_linkedin_link.required'  => 'Linkedin linki daxil ediləyib!',
            'new_linkedin_link.string'  => 'Linkedin linki yanlışdır!',
            'new_linkedin_link.min'  => 'Linkedin linki çox qısadır!',
            'new_linkedin_link.max'  => 'Linkedin linki çox uzundur!',

            'new_category.required'  => 'Kateqoriya daxil ediləyib!',
            'new_category.string'  => 'Kateqoriya yanlışdır!',
            'new_category.min'  => 'Kateqoriya daxil ediləyib!',
            'new_category.max'  => 'Kateqoriya daxil ediləyib!',

            'new_profile.file'  => 'Şəkil yanlışdır!',
            'new_profile.max'  => 'Şəkil çox böyükdür! (Şəkil çox böyükdür MAX:50mb)'
        ];
    }
}
