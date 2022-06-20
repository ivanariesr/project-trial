<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use Yajra\DataTables\Facades\DataTables;

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
/* Resource Routes Admin */
Route::resource('data-customer', 'customerController');
Route::resource('data-monitoring', 'monitoringController');
Route::resource('data-pic', 'picController');
/* -------------------------------- */

/* Resource Routes User */
Route::resource('daftar-customer', 'usrCustomerController');
/* -------------------------------- */

Route::get('/', function () {

    return view('dashboard-user');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar-monitoring', function () {
    return view('monitoring');
});

Route::get('/dashboard', function () {
    return view('layout-adm/index');
});

Route::get('/datatables-customer', 'customerController@listdata')->name('table-customer');
Route::get('/datatables-pic', 'picController@listdata')->name('table-pic');