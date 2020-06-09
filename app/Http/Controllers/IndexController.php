<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Type;
use Illuminate\Support\Facades\DB;

use App\RestTable;

class IndexController extends Controller
{
    public function index() {
      $sea_food_type_id = Type::where("name", "sea food")->first();
      $sea_food_meals = DB::table('meals')->where('type_id', $sea_food_type_id->id)->take(10)->get();

      $salad_type_id = Type::where("name", "salad")->first();
      $salad_meals = DB::table('meals')->where('type_id', $salad_type_id->id)->take(10)->get();;

      $desert_type_id = Type::where("name", "desert")->first();
      $desert_meals = DB::table('meals')->where('type_id', $desert_type_id->id)->take(10)->get();;
      $tables = RestTable::all();
      return view("index", ["sea_food_meals" => $sea_food_meals,
                            "salad_meals" => $salad_meals,
                            "desert_meals" => $desert_meals,
                            "tables" => $tables]);
    }

    public function test() {
      $tables = RestTable::take(10)->get();
      return view("test", ["tables" => $tables]);
    }
}
