<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\RestTable;
use App\Position;

class BookingController extends Controller
{
    public function tables(Request $request) {
      $tables = RestTable::all();
      foreach ($tables as $key => $value) {
        $tables[$key]->position = Position::find($tables[$key]->position_id);
      }
      return $tables;
    }
}
