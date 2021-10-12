<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required',
            'description'   => 'required|min:12',
            'phone'         => 'required',
            'mobile_phone'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo :attribute é obrigatório.',
            'name.required' => 'Este campo nome é requerido!',
            'min' => 'O campo deve ter no mínimo :min caracteres!'
        ];
    }
}
