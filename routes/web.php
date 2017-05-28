<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});



// Route::get('/user', function () {
//     return view('user');
// });

// Route::get('/farmasi', function () {
//     return view('farmasi');
// });

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/riview', function () {
    return view('riview');
});


Route::get('/user', 'farController@index');
Route::get('/riview/{id}', 'farController@riview');
Route::post('/addriview/{id}', 'farController@addRiview');
Route::get('/farmasi', 'farController@farmasi');
