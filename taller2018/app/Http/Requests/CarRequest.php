<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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

              'plate_number' => 'max:7|min:6|unique:car|required',
//            'plate_number' => 'required'
//            'plate_number'=> 'required',
//            'parking_name' => 'max:30|unique:parkings|required|',
        ];
    }
}

