<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewBooking;
use Illuminate\Support\Facades\Mail;

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
      $dt = Carbon::parse($input["arrival"]);
      $input["arrival"] = $dt;
      $input["email"] = $user->email;
      $table = RestTable::where("name", $input["table"])->first();
      $response = array();
      if ($table) {
        $input["rest_table_id"] = $table->id;
        $input["available"] = $table->check_available($dt);
        if ($input["available"]) {
          $booking = new Booking($input);
          $booking->save();
          $new_booking = new NewBooking($user->name, $booking->arrival, $table->name, $booking->number);
          try {
            Mail::to($user->email)->send($new_booking);
          } catch (\Exception $e) {

          }
          $response["msg"] = "table Booked";
        }
        else {
          $response["msg"] = "Table not booked";
          $dates = $table->suggestDates($dt);
          $response["suggested_dates"] = $dates;
          return response()->json(["dates" => $dates ], 422);
        }
      }
      else {
        $response["msg"] = "No table with name " . $input["table"];
        $tables = array();
        $tabless = RestTable::all();
        foreach ($tabless as $table) {
          array_push($tables, $table->name);
        }
        $response["tables"] = $tables;
      }

      return $response;
    }
}
