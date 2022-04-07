<?php

namespace App\Http\Requests\Employees;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
            'first_name'  => ['required'],
            'last_name'   => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'  => "Employee First Name Must Be Required",
            'last_name.required'   => "Employee Last  Name Must Be Required",
          
        ];
    }
}
