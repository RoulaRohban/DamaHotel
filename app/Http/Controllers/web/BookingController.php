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
        $request->validated();

        DB::beginTransaction();

        $user = User::create($request->only('name', 'phone', 'email'));
        $booking = Booking::create($request->only('arrival_date', 'departure_date', 'persons_num','booking_option_id'));
        $user->bookings()->save($booking);
        $total_cost = $booking->totalCost($booking->bookingOption->price , $booking->persons_num,$booking->arrival_date,$booking->departure_date);
        $booking->update(['total_cost' => $total_cost]);
        DB::commit();
        return redirect()->route('bookings.create');
    }
}
