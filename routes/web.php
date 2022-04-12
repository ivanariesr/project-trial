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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('/index');
});

Route::get('/input-monitoring', function () {
    return view('data-monitoring/input-data');
});

Route::get('/list-monitoring', function () {
    return view('data-monitoring/list-data');
});

Route::get('/input-customer', function () {
    return view('data-customer/input-data');
});

Route::get('/list-customer', function () {
    return view('data-customer/list-data');
});