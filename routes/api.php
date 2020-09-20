<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Booking;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'API\UserController@login')->name('api-login');
Route::post('register', 'API\UserController@register')->name('api-register');

Route::get("tables", 'API\BookingController@tables')->name('api_tables');

Route::post("logout", 'API\UserController@logout')->name("api-logout");

Route::group(['middleware' => 'auth:api'], function() {
  
  Route::post('booking', 'API\BookingController@book')->name("api-book");
});
