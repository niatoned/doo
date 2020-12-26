<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home');
});

//Route::get('/booking', function () {
//    return view('booking');
//})->name('booking');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/booking', 'App\Http\Controllers\HomeController@booking')->name('booking');
Route::resource('bookings','App\Http\Controllers\BookingController');
