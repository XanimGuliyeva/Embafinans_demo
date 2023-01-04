<?php

namespace App\Http\Requests\MissionRequest;

use Illuminate\Foundation\Http\FormRequest;

class MissionRequest extends FormRequest
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
            'mycontent' => 'required|max:5000|min:10|string',
        ];
    }
    public function messages()
    {
        return [
            'mycontent.required' => 'Məzmun daxil ediləyib!',
            'mycontent.string' => 'Məzmun yanlışdır!',
            'mycontent.min' => 'Məzmun çox qısadır!',
            'mycontent.max' => 'Məzmun çox uzundur!',
        ];
    }
}
