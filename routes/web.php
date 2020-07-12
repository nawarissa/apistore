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
//Route::group(['middleware' => 'auth:web'], function() {
Route::get('/', "IndexController@index")->name("index");
//});

Route::get('/about', function () {
    return view('layouts.base');
});

Route::get("/meals", "MealController@index");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Auth::routes();

Route::get('/login', 'UserController@login')->name("login");
Route::get('/register', 'UserController@register')->name("register");

Route::get('/home', 'HomeController@index')->name('home');

Route::post("/booking", 'BookingController@book')->name("booking")->middleware("auth");
