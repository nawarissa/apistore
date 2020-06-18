<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function login(Request $request) {
    return view("login");
  }
  public function register() {
    return view("register");
  }
  public function details(Request $request) {
    return view("details");
  }
}
