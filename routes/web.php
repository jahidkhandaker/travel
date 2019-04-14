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
    return view('t.index');
});

Route::get('/destination', 'allViews@viewPlaces');

Route::get('/hotelresto', function () {
    return view('t.hotelresto');
});

Route::get('/loginpage', function () {
    return view('t.layout.loginpage');
});

//Route::get('/cox', 'allViews@viewPlaces');

Route::post('/loginme', 'loginController@signin');

Route::post('/signUpMe', 'loginController@signUp');

Route::post('/adminLogin', 'loginController@adminLogin');

Route::post('/adminUp', 'database_controller@adminUp');

Route::post('/adminOut', 'loginController@adminOut');

