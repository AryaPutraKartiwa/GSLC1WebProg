<?php

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

use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;

Route::get('/',[\App\Http\Controllers\WebController::class, 'index']);

Route::get('/web', 'App\Http\Controllers\WebController@index');
Route::get('/web/list',  'App\Http\Controllers\WebController@list');
