<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerOrderInfoRequest extends FormRequest
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
            'delivery_date'  => ['required', 'date'],
            'stiching_category'  => ['required'],
            'quantity'   => ['required', 'integer'],
           
        ];
    }

    public function messages()
    {
        return [
           'delivery_date.required'  => "Delivery Date  Is Required",
           'delivery_date.date'      => "Delivery Date Must Be Date Format",
           'stiching_category.required'   => "Stiching Category Is Required",
           'quantity.integer'  => "Quantity Must Be Integer",
           'quantity.required'  => "Quantity  Is Integer",
           'advance.integer'  => "Advance Must Be Integer",
           'advance.required'   => "Advance Is  Integer",
        ];
    }
}
