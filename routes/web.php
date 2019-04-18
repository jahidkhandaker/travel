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




// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', 'allViews@viewPlaces');

Route::post('/demo', 'allViews@demo');



Route::get('/loginpage', function () {
    return view('layouts.loginpage');
});


Route::post('/loginme', 'loginController@signin');

Route::post('/signUpMe', 'loginController@signUp');

Route::post('/adminLogin', 'loginController@adminLogin');

Route::post('/adminPlacesUp', 'database_controller@adminPlacesUp');

Route::post('/adminHotelsUp', 'database_controller@adminHotelsUp');

Route::post('/adminOut', 'loginController@adminOut');


