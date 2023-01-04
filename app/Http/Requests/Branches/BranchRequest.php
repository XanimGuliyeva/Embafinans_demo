<?php

namespace App\Http\Requests\Branches;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'name' => 'required|max:250|min:3|string',
            'address' => 'required|max:250|min:3|string',
            'phone' => 'required|max:20|min:4|string',
            'city' => 'required|min:4|string',
            'latitude' => 'required|min:1',
            'longitude' => 'required|min:1',
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Filialın adı daxil ediləyib!',
            'name.string'  => 'Filialın adı yanlışdır!',
            'name.min'  => 'Filialın adı çox qısadır!',
            'name.max'  => 'Filialın adı çox uzundur!',

            'address.required'  => 'Ünvan daxil ediləyib!',
            'address.string'  => 'Ünvan yanlışdır!',
            'address.min'  => 'Ünvan çox qısadır!',
            'address.max'  => 'Ünvan çox uzundur!',

            'phone.required'  => 'Telefon daxil ediləyib!',
            'phone.string'  => 'Telefon yanlışdır!',
            'phone.min'  => 'Telefon çox qısadır!',
            'phone.max'  => 'Telefon çox uzundur!',

            'city.required'  => 'Şəhər daxil ediləyib!',
            'city.string'  => 'Şəhər yanlışdır!',
            'city.min'  => 'Şəhər daxil ediləyib!',

            'latitude.required'  => 'Məkan daxil ediləyib!',
            'latitude.min'  => 'Məkan düzgün seçilməyib!',

            'longitude.required'  => 'Məkan daxil ediləyib!',
            'longitude.min'  => 'Məkan düzgün seçilməyib!',
        ];
    }
}
