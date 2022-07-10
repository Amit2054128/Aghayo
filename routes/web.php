<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RestaurantController;
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
Route::get('/',[PageController::class,'home']);
Route::get('/contact',[PageController::class,'contact']);
Route::get('/bakery',[PageController::class,'bakery']);
Route::get('/restaurants',[PageController::class,'restaurants']);

// restaurants route
Route::get('/pizza_house',[RestaurantController::class,'pizza_house']);
Route::get('/burger_house',[RestaurantController::class,'burger_house']);

