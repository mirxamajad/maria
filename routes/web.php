<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Grundriss;
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
    return view('welcome');
});

Route::resource('contact', Contact::class);
Route::resource('Grundriss', Grundriss::class);
Route::resource('digital_home_staing', Dhs::class);
Route::get('ihre_daten', 'Grundriss@ihre_daten')->name('ihre_daten');
Route::get('payment', 'Grundriss@payment')->name('payment');
Route::get('successfully', 'Grundriss@thanks')->name('thanks');
Route::get('successfull', 'Grundriss@newthanks')->name('newthanks');
Route::get('auftragsdetails', 'Grundriss@auftragsdetails')->name('auftragsdetails');
Route::get('create', 'Dhs@booking')->name('booking');
Route::get('gewerbe_booking', 'Grundriss@gewerbe_booking')->name('gebkooking');
Route::get('aboutus', 'Contact@aboutus')->name('aboutus');
