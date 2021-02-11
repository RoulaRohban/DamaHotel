<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'name' => 'required|string|min:3|max:200',
            'phone' => 'required|digits:10',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'persons_num' => 'required|integer|min:1',
            'booking_option_id' => 'required|exists:booking_options,id',
        ];
    }
}
