<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\authController;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Middleware\Authenticate;

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


Route::get('/login', [authController::class,"loginView"])->name('login');
Route::post('/do-login', [authController::class,"doLogin"]);

/*----------------------------------------------------------------------------------- */
Route::group(['middleware' => authenticate::class ], function () {

    /* Resource Routes Admin */
Route::resource('data-customer', 'customerController');
Route::resource('data-monitoring', 'monitoringController');
Route::resource('data-pic', 'picController');
Route::resource('data-user', 'userController');
/* -------------------------------- */
//    Route::patch('/data-monitoring/update/{id}', 'monitoringController@update')->name('update-monitoring');
    Route::get('/dashboard', [authController::class,"dashboard"]);
    Route::get('/datatables-customer', 'customerController@listdata')->name('table-customer');
    Route::get('/datatables-pic', 'picController@listdata')->name('table-pic');    
    Route::get('/datatables-user', 'userController@listdata')->name('table-user');    
    Route::get('/datatables-monitoring', 'monitoringController@listdata')->name('table-monitoring');    
    
    Route::get('/download/{request}', 'monitoringController@download_file')->name('download_file');

    Route::post('/do-register', [authController::class,"doRegister"]);
    Route::get('/logout', [authController::class,"logout"]);
    Route::post('/update_password/{id}', 'userController@update_password')->name('update_password');

});