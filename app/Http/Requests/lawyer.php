<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class lawyer extends FormRequest
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
            'new_img'       => 'mimes:jpeg,jpg,png|max:5000',
            'mobile'        => 'required',
            'first_name'    => 'required',
            'address'       => 'required',
            'state'         => 'required',
            'city'          => 'required',
            'gender'        => 'required',
            'status'        => 'required',

            'dob'           => 'required',
            // 'education.*'     => 'required',
            'license'       => 'required',
            // 'yoe'           => 'required',
            // 'expertise.*'     => 'required',
            // 'court.*'     => 'required',
            // 'areaOfPractice'=> 'required',
            // 'files.*'         => 'mimes:pdf,doc|max:5000',
            
            // 'free'          => 'required',
            // 'language.*'    =>  'required',
            // 'photos.*'       => 'mimes:jpeg,jpg,png|max:5000',
            // 'day.*'           => 'required',
            // 'timet.*'          => 'required',
            // 'timef.*'          => 'required',
            // 'service.*'       => 'required',
            // 'firstfee'      => 'required',
            // 'hourfee'       => 'required',
            // 'payment.*'       => 'required',
        ];
    }

        public function messages()
    {
        return [

            'new_img.mimes'     => 'The Image should be jpeg, jpg or png extentions!',
            'new_img.max'       => 'The Image should be less then 5mb size!',
            'first_name.required' => 'This first name Should never blank!',
            'mobile.required'   => 'The mobile number should be Given!',
            'address.required'  => 'Please fill address field!',
            'state.required'    => 'Please fill state field!',
            'city.required'     => 'Please fill city field!',
            'gender.required'   => 'Please fill gender field!',
            'status'            => 'Please fill status field!',
            'dob.required'      => 'Please fill date of birth field!',
            'license.required'  => 'Please fill licence field!',
            // 'yoe.required'      => 'Please fill :attribute field!',
            // 'areaOfPractice.required'=> 'Please fill :attribute field!',
            // 'bar.required'      => 'Please Select one of these options!',
            // 'free.required'     => 'Please Select one of these options!',
        
            // 'firstfee.required' => 'Please fill :attribute field!',
            // 'hourfee.required'  => 'Please fill :attribute field!',
                      
        ];
    }
}
