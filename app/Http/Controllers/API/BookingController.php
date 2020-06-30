<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\RestTable;
use App\Position;
use App\Booking;

use Carbon\Carbon;
use Debugbar;
use Debugger;

class BookingController extends Controller
{
    public function tables(Request $request) {
      $tables = RestTable::all();
      foreach ($tables as $key => $value) {
        $tables[$key]->position = Position::find($tables[$key]->position_id);
        $booking_count = Booking::where("rest_table_id", $tables[$key]->id)->whereDate("arrival", ">", Carbon::now())->count();
        $tables[$key]->booking_count = $booking_count;
      }
      return response()->json(["tables" => $tables]);
    }
    public function book(Request $request) {
      $user = Auth::user();
      $input = $request->all();
      $input["user_id"] = Auth::id();
      lad($input["arrival"]);
      $dt = Carbon::parse($input["arrival"]);
      $input["arrival"] = $dt;
      $table = RestTable::where("name", $input["table"])->first();
      $response = array();
      if ($table) {
        $input["rest_table_id"] = $table->id;
        $input["available"] = $table->check_available($dt);
        if ($input["available"]) {
          $booking = new Booking($input);
          $booking->save();
          $response["msg"] = "ok";
        }
        else {
          $response["msg"] = "no";
          $dates = $table->suggestDates($dt);
          $response["suggested_dates"] = $dates;
          return response()->json(["dates" => $dates ], 422);
        }
      }
      else {
        $input["table"] = "Not Found";
      }

      return $response;
    }
}
