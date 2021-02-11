<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\StoreBookingRequest;
use App\models\Booking;
use App\models\BookingOption;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function create()
    {
        $options = BookingOption::all();
        $count_of_bookings = Booking::count();
        $bookings=Booking::all();
        return view('home',compact('options','count_of_bookings','bookings'));
    }
    public function store(StoreBookingRequest $request)
    {
        $validated_date = $request->validated();
        dd($validated_date);

        DB::beginTransaction();
        User::create($request->only('name', 'phone', 'email'));
        //Booking::create($request->only('arrival_date', 'departure_date', 'persons_num','booking_option_id'));
        DB::commit();
        return redirect()->route('bookings.create');
    }
}
