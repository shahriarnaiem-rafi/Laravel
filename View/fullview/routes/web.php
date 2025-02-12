<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/table1', function () {
    return view('table');
});
Route::get('/table1', [UserController::class, 'firstTable'])->name('firstTable');
