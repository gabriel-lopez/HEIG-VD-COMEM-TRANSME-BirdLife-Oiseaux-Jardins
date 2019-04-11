<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('birds', 'BirdsController@api');
Route::post('birds', 'BirdsController@search');

Route::resource('orders', 'OrdersController');
Route::resource('families', 'FamiliesController');
Route::resource('habitats', 'HabitatsController');