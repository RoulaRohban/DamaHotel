<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BookingOption extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
