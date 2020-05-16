<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Booking;

class BookingController extends Controller
{
    public function book(Request $request) {
      $request->validate([
        "name" => "required",
        "number" => "required",
        "arrival" => "required",
        "mobile" => "required"
      ], [
        "name.required" => "booking name is required",
        "number.required" => "Number of guests is required",
        "arrival.required" => "Date fo arrival is required",
        "mobile.required" => "A mobile number is required"
      ]);
      $input = $request->all();
      $input["user_id"] = Auth::id();
      $book = Booking::create($input);

      return redirect()->route("index")->with('success', 'Booking created successfully');
    }
}
