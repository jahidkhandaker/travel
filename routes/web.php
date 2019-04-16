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




<<<<<<< HEAD
// Route::get('/', function () {
//     return view('index');
// });
=======
Route::get('/', function () {
    return view('t.index');
});
Route::get('/coxbazar', function () {
    return view('t.coxbazar');
});
>>>>>>> 38eaf69232ed31bb6f432989baa05e3835b923da


Route::get('/', 'allViews@viewPlaces');
Route::post('/demo', 'allViews@demo');

// Route::get('/hotelresto', function () {
//     return view('t.hotelresto');
// });

Route::get('/loginpage', function () {
    return view('layouts.loginpage');
});

//Route::get('/cox', 'allViews@viewPlaces');

Route::post('/loginme', 'loginController@signin');

Route::post('/signUpMe', 'loginController@signUp');

Route::post('/adminLogin', 'loginController@adminLogin');

Route::post('/adminUp', 'database_controller@adminUp');

Route::post('/adminOut', 'loginController@adminOut');

