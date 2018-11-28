<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParkingRequest extends FormRequest
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
            'parking_name' => 'max:30|unique:parkings|required|',
            'parking_address'=>'required|max:300',
            'total_spaces'=>'required|max: 1000|numeric',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'latitude' => 'required',
            'longitud' => 'required'

        ];
    }
}
