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

Route::resource('calendar', 'CalendarController');

Route::get('/', function () {
    return view('calendar');
});

Route::get('/getEvents','CalendarController@getEvents');
Route::get('/updateEvents','CalendarController@updateEvents');
Route::get('/storeEvents/{event}/{datefrom}/{dateto}/{mon}/{tue}/{wed}/{thu}/{fri}/{sat}/{sun}/','CalendarController@storeEvents');