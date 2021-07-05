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

Route::middleware(["Loginyes"])->group(function(){
    Route::get('/', function () {
        return view('login');
    });

    Route::get('signup', function () {
        return view('signup');
    });
    Route::post('loginSubmit','App\Http\Controllers\HomeController@loginSubmit');
    Route::post('signupSubmit','App\Http\Controllers\HomeController@signupSubmit');
});

Route::middleware(["Loginno"])->group(function(){
    Route::get('dashboard','App\Http\Controllers\RestroController@dashboard');
    Route::post('ad_validation','App\Http\Controllers\RestroController@ad_validation');
    Route::post('service_validation','App\Http\Controllers\RestroController@service_validation');
    Route::post('weburl_validation','App\Http\Controllers\RestroController@weburl_validation');
    Route::post('desc_validation','App\Http\Controllers\RestroController@desc_validation');
    Route::post('cashback_validation','App\Http\Controllers\RestroController@cashback_validation');
    Route::post('calender_validation','App\Http\Controllers\RestroController@calender_validation');
    Route::post('calender_delete','App\Http\Controllers\RestroController@calender_delete');
    Route::post('reward_validation','App\Http\Controllers\RestroController@reward_validation');
    Route::post('myinfo_validation','App\Http\Controllers\RestroController@myinfo_validation');
    Route::post('interior_validation','App\Http\Controllers\RestroController@interior_validation');
    Route::post('contact_validation','App\Http\Controllers\RestroController@contact_validation');
    Route::post('drink_validation','App\Http\Controllers\RestroController@drink_validation');
    Route::post('update_prod_status','App\Http\Controllers\RestroController@update_prod_status');
});

Route::get('signout','App\Http\Controllers\RestroController@signout');
