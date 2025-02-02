<?php

use App\Http\Controllers\DemoController;
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
Route::get('/demo', [DemoController::class,'show']);
Route::delete('delete{id}', DemoController::class.'@destroy')->name('delete');
Route::get('/create', [DemoController::class,'create'])->name('create');
Route::post('store', [DemoController::class,'store'])->name('store');


Route::get('edit/{student_id}', [DemoController::class,'update'])->name('edit');

Route::post('edit-store', [DemoController::class,'editStore'])->name('editStore');

