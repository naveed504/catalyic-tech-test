<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerResuest extends FormRequest
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
            'customer_name' => ['required'],
            'customer_phoneno' => ['required'],
            'customer_city' => ['required'],
            'customer_sex' => ['required'],
            'shoulder' => ['required'],
            'chest' => ['required'],
            'waist' => ['required'],
            'half_sleeves' => ['required'],
            'full_sleeves' => ['required'],
            'kuff' => ['required'],
            'collar' => ['required'],
            'long_length' => ['required'],
            'short_length' => ['required'],
            'manacle' => ['required'],
            'shalwar_length' => ['required'],    
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' =>  "Customer Name Is Required",
            'customer_phoneno.required' =>  "Customer  Number Is Required",
            'customer_city.required' =>  "Customer City Is Required",
            'customer_sex.required' =>  "Customer Gender  Is Required",
            'shoulder.required' =>  "Shoulder Size Is Required",
            'chest.required' =>  "Chest Size Is Required",
            'waist.required' =>  "Waist Size Is Required",
            'half_sleeves.required' =>  "Half Sleeves Size Is Required",
            'full_sleeves.required' =>  "Full Sleeves Size Is Required",
            'kuff.required' =>  "Kuff Size Is Required",
            'collar.required' =>  "Collar Size Is Required",
            'long_length.required' =>  "Long Length Size Is Required",
            'short_length.required' =>  "Short Length Size Is Required",
            'manacle.required' =>  "Manacle Size Is Required",
            'shalwar_length.required' =>  "Shalwar Size Is Required",
        ];
    }
}
