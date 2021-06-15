<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;

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
    return view('index');
});


//routingan data customer
Route::resource('datacustomer', customerController::class);
Route::get('datacustomer', [customerController::class, 'index'])->name('datacustomer.list');
Route::post('datacustomer-delete', [customerController::class,'destroy']);