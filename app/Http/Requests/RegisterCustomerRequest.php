<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterCustomerRequest extends Request
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
            
            'CusName'=>'required|regex:/^[\pL\s\-]+$/u',
            'cusTele'=>'required|regex:/^[0-9]{10}$/',
            'CusPW'=>'confirmed|min:5|max:12',
            'CusEmail'=>'required|email',
            'CusNIC'=>'required|size:10',
            'vMake'=>'required',
            'vModel'=>'required',
            'vnumbP'=>'required',

                ];
            }

    public function messages()
    {
        return [

            'cusTele.required'=>'Telephone is required',
            'cusTele.regex'=>'Telephone should contain 10 numbers, Use 011 prefix for land lines',
            'CusEmail.email' => 'Email should be a vaild email, ex: abc@abc.com',
            'CusPW.confirmed' => 'The password confirmation does not match',
            'CusPW.min' => 'The password can have minimum of 5 characters',
            'CusPW.max' => 'The password can have maximum of 12 characters',
            'CusAdd.required' => 'Address is required',
            'CusNIC.required' => 'NIC is required',
            'CusNIC.size' => 'NIC should be 10 characters',
            'CusName.required' => 'Name is required',
            'CusName.regex' => 'Name should not contain special characters',
            'vMake.required' => 'Vehicle Make is required',
            'vModel.required' => 'Vehicle Model is required',
            'vnumbP.required' => 'Number Plate is required',
            'CusEmail.required' => 'Email Plate is required',
            
        ];
    }
}
