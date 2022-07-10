<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
public function pizza_house()
{
    return view('frontend.restaurants.pizahouse');
}
public function burger_house()
{
  return view('frontend.restaurants.burgerhous');
}
}
