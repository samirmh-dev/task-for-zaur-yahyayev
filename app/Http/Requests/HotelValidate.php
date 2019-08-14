<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /*public function authorize()
    {
        return false;
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'stars' => 'required|integer|min:1|max:5',
            'city' => 'required|min:3',
            'adress' => 'required|min:3',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable'
        ];
    }
}
