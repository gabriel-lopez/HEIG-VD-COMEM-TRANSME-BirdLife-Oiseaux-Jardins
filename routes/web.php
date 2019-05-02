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

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/{vue_capture?}', function () {
    // return view('welcome');
    return File::get(public_path() . '/dist/index.html');
})->where('vue_capture', '^(?!storage).*$');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
