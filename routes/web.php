<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function()
{
    return View::make('pages.demo');
});

Route::get('/game', function()
{
    return View::make('pages.game');
});

/*Route::get('birds', function()
{
    return View::make('pages.birds');
});*/

Route::resource('birds', 'BirdsController');
