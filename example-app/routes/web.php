<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', [UserController::class,'show'] );
Route::get('/home', [FlightController::class,'show'] );

Route::delete('delete{id}', FlightController::class.'@destroy')->name('delete');
