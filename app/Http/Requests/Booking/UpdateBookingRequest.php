<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
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
            'email' => 'sometimes|required|email|unique:users',
            'name' => 'sometimes|required|string|min:3|max:200',
            'phone' => 'sometimes|required|digits:10',
            'arrival_date' => 'sometimes|required|date',
            'departure_date' => 'sometimes|required|date',
            'persons_num' => 'sometimes|required|integer|min:1',
            'booking_option_id' => 'sometimes|required|exists:booking_options,id',
        ];
    }
}
