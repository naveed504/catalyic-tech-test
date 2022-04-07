<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StichingPricingRequest extends FormRequest
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
            'single_stiching'  => ['required', 'integer'],
            'double_stiching'  => ['required', 'integer'],
            'shirt_stiching'   => ['required', 'integer'],
        ];
    }

     public function messages()
     {
         return [
            'single_stiching.required'  => "Single Stiching Price Is Required",
            'double_stiching.required'  => "Double Stiching Price Is Required",
            'shirt_stiching.required'   => "Shirt Stiching Price Is Required",
            'single_stiching.integer'  => "Single Stiching Price Must Be Integer",
            'double_stiching.integer'  => "Double Stiching Price Must Be Integer",
            'shirt_stiching.integer'   => "Shirt Stiching Price Must Be Integer",
         ];
     }
}
