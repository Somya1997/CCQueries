<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Complaint_form_request extends FormRequest
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
                'name'               => 'bail|required|max:30|',
                'registrationno'     => 'required|max:15|alpha_num',
                'phonenumber'        => 'required|size:10|numeric',
                'email'              => 'required|max:100|email',
                'natureofproblem'    => 'required|max:100|string',
                'hostel'             => 'required|max:30|',
                'room'               => 'required|max:255|numeric',
                'availabilitytime'   => 'required|max:10',
                'availabilityday'    => 'required|max:10|date',
            
        ];
    }
}
