<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PagesRequest extends FormRequest
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'data' => 'required|date',
            'drug' => 'required|max:255'
        ];
    }
        public function messages()
    {
        return [
            'name.required' => 'Pole jest wymagane',
            'surname.required' => 'pole jest wymagane'
        ];

    }
}
