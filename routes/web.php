<?php

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
    return view('landing.index');
});

Route::group(['prefix' => 'auth', 'namespace' => 'Session', 'middleware' => 'guest'], function () {

  Route::get('/register','RegisterController@create')->name('register-user');
    Route::post('/register/create-account','RegisterController@store')->name('create-account');
            
  
});
