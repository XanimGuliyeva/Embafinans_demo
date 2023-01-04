<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'term' => 'string',
            'min_amount' => 'required|max:200|min:1|string',
            'max_amount' => 'required|max:200|min:1|string',
            'monthly_payment' => 'required|max:200|min:1|string',
            'min_term' => 'required|max:200|min:1|string',
            'max_term' => 'required|max:200|min:1|string',
            'annual_rate' => 'required|max:200|min:1|string',
            'FIFD' => 'required|max:200|min:1|string',
            'commission' => 'required|min:4|string',
            'payment_form' => 'required|min:4|string',
            'financing' => 'required|max:200|min:1|string',
            'age' => 'required|max:200|min:1|string',
            'bail' => 'required|max:1000|min:1|string',
            'documents' => 'required|max:1000|min:1|string',
            'informations' => 'required|max:1000|min:1|string',
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

            'term.string'  => 'Müddət yanlışdır!',

            'min_amount.required'  => 'Minimum məbləğ daxil ediləyib!',
            'min_amount.string'  => 'Minimum məbləğ yanlışdır!',
            'min_amount.min'  => 'Minimum məbləğ çox qısadır!',
            'min_amount.max'  => 'Minimum məbləğ çox uzundur!',

            'max_amount.required'  => 'Maksimum məbləğ daxil ediləyib!',
            'max_amount.string'  => 'Maksimum məbləğ yanlışdır!',
            'max_amount.min'  => 'Maksimum məbləğ çox qısadır!',
            'max_amount.max'  => 'Maksimum məbləğ çox uzundur!',

            'monthly_payment.required'  => 'Aylıq ödəniş daxil ediləyib!',
            'monthly_payment.string'  => 'Aylıq ödəniş yanlışdır!',
            'monthly_payment.min'  => 'Aylıq ödəniş çox qısadır!',
            'monthly_payment.max'  => 'Aylıq ödəniş çox uzundur!',

            'min_term.required'  => 'Minimum müddət daxil ediləyib!',
            'min_term.string'  => 'Minimum müddət yanlışdır!',
            'min_term.min'  => 'Minimum müddət çox qısadır!',
            'min_term.max'  => 'Minimum müddət çox uzundur!',

            'max_term.required'  => 'Maksimum müddət daxil ediləyib!',
            'max_term.string'  => 'Maksimum müddət yanlışdır!',
            'max_term.min'  => 'Maksimum müddət çox qısadır!',
            'max_term.max'  => 'Maksimum müddət çox uzundur!',

            'annual_rate.required'  => 'İllik faiz dərəcəsi daxil ediləyib!',
            'annual_rate.string'  => 'İllik faiz dərəcəsi yanlışdır!',
            'annual_rate.min'  => 'İllik faiz dərəcəsi çox qısadır!',
            'annual_rate.max'  => 'İllik faiz dərəcəsi çox uzundur!',

            'FIFD.required'  => 'FİFD daxil ediləyib!',
            'FIFD.string'  => 'FİFD yanlışdır!',
            'FIFD.min'  => 'FİFD çox qısadır!',
            'FIFD.max'  => 'FİFD çox uzundur!',

            'commission.required'  => 'Kreditə görə komissiya daxil ediləyib!',
            'commission.string'  => 'Kreditə görə komissiya yanlışdır!',
            'commission.min'  => 'Kreditə görə komissiya daxil ediləyib!',

            'payment_form.required'  => 'Ödəniş forması daxil ediləyib!',
            'payment_form.string'  => 'Ödəniş forması yanlışdır!',
            'payment_form.min'  => 'Ödəniş forması daxil ediləyib!',

            'financing.required'  => 'Eyni növ malın maliyyələşməsi daxil ediləyib!',
            'financing.string'  => 'Eyni növ malın maliyyələşməsi yanlışdır!',
            'financing.min'  => 'Eyni növ malın maliyyələşməsi çox qısadır!',
            'financing.max'  => 'Eyni növ malın maliyyələşməsi çox uzundur!',

            'age.required'  => 'Yaş həddinə tələb daxil ediləyib!',
            'age.string'  => 'Yaş həddinə tələb yanlışdır!',
            'age.min'  => 'Yaş həddinə tələb çox qısadır!',
            'age.max'  => 'Yaş həddinə tələb çox uzundur!',

            'bail.required'  => 'Zaminlik tələb edilən hallar daxil ediləyib!',
            'bail.string'  => 'Zaminlik tələb edilən hallar yanlışdır!',
            'bail.min'  => 'Zaminlik tələb edilən hallar çox qısadır!',
            'bail.max'  => 'Zaminlik tələb edilən hallar çox uzundur!',

            'documents.required'  => 'Tələb olunan sənədlər daxil ediləyib!',
            'documents.string'  => 'Tələb olunan sənədlər yanlışdır!',
            'documents.min'  => 'Tələb olunan sənədlər çox qısadır!',
            'documents.max'  => 'Tələb olunan sənədlər çox uzundur!',

            'informations.required'  => 'Tələb olunan məlumatlar daxil ediləyib!',
            'informations.string'  => 'Tələb olunan məlumatlar yanlışdır!',
            'informations.min'  => 'Tələb olunan məlumatlar çox qısadır!',
            'informations.max'  => 'Tələb olunan məlumatlar çox uzundur!',

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
