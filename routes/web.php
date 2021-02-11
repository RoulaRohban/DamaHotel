<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::group( ['namespace' => 'web'], function()
{
    //Route::resource('bookings', 'BookingController');

Route::get('/', 'BookingController@create')->name('bookings.create');
Route::post('/', 'BookingController@store')->name('bookings.store');

});
