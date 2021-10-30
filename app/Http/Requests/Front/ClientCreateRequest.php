<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ClientCreateRequest extends FormRequest
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
//            'user'=>[
                'name'=>"required",
                'email'=>"required",
//            ],
//            'client'=>[
                'document'=>"required",
                'date_of_birth'=>"required",
                'phone'=>"required",
                'whatsapp'=>"required",
                'address'=>"required",
                'number_builder'=>"required",
                'zipcode'=>"required",
                'city'=>"required",
                'complement'=>"required",
                'state'=>"required",
                'has_children'=>"required",
                'marital_status'=>"required",
                'working'=>"required",
                'has_interest'=>"required",
//            ]
        ];
    }
}
