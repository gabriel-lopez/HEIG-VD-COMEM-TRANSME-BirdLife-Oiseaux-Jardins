<?php

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('birds', 'BirdsController@index');
Route::get('birds/{id}', 'BirdsController@show');

Route::get('orders', 'OrdersController@index');
Route::get('families', 'FamiliesController@index');
Route::get('habitats', 'HabitatsController@index');
Route::get('colors', 'ColorsController@index');
Route::get('sizes', 'SizesController@index');
Route::get('beakshapes', 'BeakShapesController@index');
Route::get('features', 'FeaturesController@index');

Route::get('submissions', 'SubmissionsController@index');
Route::post('submissions', 'SubmissionsController@store');