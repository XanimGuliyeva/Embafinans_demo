<?php

namespace App\Http\Requests\Offers;

use Illuminate\Foundation\Http\FormRequest;

class EditOffersRequest extends FormRequest
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
            'name' => 'required|max:200|min:3|string',
            'about' => 'required|max:500|min:3|string',
            'value' => 'max:1000000',
            'choice' => 'required|min:4|string',
            'term' => 'required|min:4|string',
            'mycontent' => 'required|max:100000|min:1|string',
            'category' => 'required|min:1|max:3|string',
            'main_image' => 'max:50000'
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Məhsul daxil ediləyib!',
            'name.string'  => 'Məhsul yanlışdır!',
            'name.min'  => 'Məhsul çox qısadır!',
            'name.max'  => 'Məhsul çox uzundur!',

            'about.required'  => 'Qısa məzmun daxil ediləyib!',
            'about.string'  => 'Qısa məzmun yanlışdır!',
            'about.min'  => 'Qısa məzmun çox qısadır!',
            'about.max'  => 'Qısa məzmun çox uzundur!',

            'value.max'  => 'Başlıqda yazılacaq dəyər çox böyükdür!',

            'choice.required'  => 'Məhsul başlıq forması daxil ediləyib!',
            'choice.string'  => 'Məhsul başlıq forması yanlışdır!',
            'choice.min'  => 'Məhsul başlıq forması daxil ediləyib!',

            'term.required'  => 'Müddət daxil ediləyib!',
            'term.string'  => 'Müddət yanlışdır!',
            'term.min'  => 'Müddət daxil ediləyib!',

            'mycontent.required'  => 'Məzmun daxil ediləyib!',
            'mycontent.string'  => 'Məzmun yanlışdır!',
            'mycontent.min'  => 'Məzmun çox qısadır!',
            'mycontent.max'  => 'Məzmun çox uzundur!',

            'category.required'  => 'Kateqoriya daxil ediləyib!',
            'category.string'  => 'Kateqoriya yanlışdır!',
            'category.min'  => 'Kateqoriya daxil ediləyib!',
            'category.max'  => 'Kateqoriya daxil ediləyib!',

            'main_image.max'  => 'Şəkil çox böyükdür! (MAX:50mb)'
        ];
    }
}
