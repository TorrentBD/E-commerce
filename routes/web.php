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
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});

Route::post('/add', [
        'uses' => 'HomeController@index',
    ]);

Route::get('/list', function () {
    return view('list');
});

Route::get('/family', function () {
    return view('family');
});

