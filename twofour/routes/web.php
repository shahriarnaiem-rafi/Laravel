<?php

use App\Http\Controllers\NewController;
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
    return view('master');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/add-user', function () {
    return view('pages.aurth.add_user');
});
Route::get('/manage-user', function () {
    return view('pages.aurth.manage_user');
});
Route::get('/manage-user',[NewController::class,'index'])->name('manage-user');

Route::get('/payament', function () {
    return view('pages.payment.payament');
});
Route::get('/payament',[NewController::class,'index2'])->name('payament');

