<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightValidate extends FormRequest
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
            'airline' => 'required|min:2',
            'plane' => 'required|min:2',
            'arrival_date' => 'required|date_format:Y-m-d',
            'arrival_time' => 'required|date_format:g:ia',
            'price' => 'required|numeric|min:0',
            'destination' => 'required|min:2',
            'departure' => 'required|min:2',
            'adult' => 'required|integer|min:1|max:65000',
            'description' => 'nullable'
        ];
    }
}
