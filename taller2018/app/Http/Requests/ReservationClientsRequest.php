<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
class ReservationClientsRequest extends FormRequest
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
            //

          //  'entry_date' => 'required|date|nullable|after_or_equal:strtime("%d-%m-%Y"))|max:10',
            'entry_date' => 'required',
            'entry_hour' => 'required',
            'departure_date' => 'required',
            'departure_hour' => 'required'
  //          date|nullable|after_or_equal:effectiver_date
//            'required|date|after:start_date'
//            'parking_name' => 'max:30|unique:parkings|required|',
//            'parking_address'=>'required|max:300',
//            'total_spaces'=>'required|max: 1000|numeric',

        ];
    }
}
