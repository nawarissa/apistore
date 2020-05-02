<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class IndexController extends Controller
{
    public function index() {
      $meals = Meal::take(10)->get();
      return view("index", ["meals" => $meals]);
    }
}
