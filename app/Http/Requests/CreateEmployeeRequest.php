<?php

namespace App\Http\Requests;

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
            'id' => 'required|max:8|unique:employees,id|regex:/^([0-9])+$/u',
            'name' => 'required|min:3',
            'sex' => 'required',
            'department' => 'required',
            'birthday' => 'required|date',
            'phone' => 'required|min:10|max:11|regex:/^([0-9])+$/u',
            'CMND' => 'required|min:9|max:12|unique:employees,CMND_number|regex:/^([0-9])+$/u',
            'email' => 'required||email|unique:employees,email',
            'address' => 'required'
        ];
    }
}
