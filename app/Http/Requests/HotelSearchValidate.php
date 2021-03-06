<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelSearchValidate extends FormRequest
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
            'city' => 'required|min:2',
            'check-in' => 'required|date_format:Y-m-d',
            'check-out' => 'required|date_format:Y-m-d',
            'rooms' => 'required|integer|min:1',
        ];
    }
}
