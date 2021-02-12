<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Booking extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookingOption()
    {
        return $this->belongsTo(BookingOption::class);
    }

    public function calculateDays($startDate,$endDate){
        $datetime1 = new DateTime($startDate);
        $datetime2 = new DateTime($endDate);
        $interval = $datetime1->diff($datetime2);
        return $interval->format('%a');
    }

    public function calculateCost($originalPrice,$numOfPersons){
        $newPrice = $originalPrice * 0.15 ;
        $newCost = $originalPrice + ($numOfPersons - 1) * $newPrice;
        return $newCost;
    }

    public function totalCost($originalPrice,$numOfPersons,$startDate,$endDate){
        $costOfPersons = $this->calculateCost($originalPrice,$numOfPersons);
        $numOfDays = $this->calculateDays($startDate,$endDate);
        return $costOfPersons * $numOfDays;
    }
}
