<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class loyaltyrequest extends Request
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

            'to'=>'after:from',

        ];
    }

    public function messages()
    {
        return [

            'to.after' => 'To date should be greater than from date',

        ];
    }
}
