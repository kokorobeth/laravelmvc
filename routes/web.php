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
//     return view('welcome');
// });


// Route::get('/test/{angka}', function($angka) {
//     return view('test', ["angka" => $angka]);
// });

// Route::get('/form', 'RegisterController@form');

// Route::get('/sapa', 'RegisterController@sapa');

// Route::post('/sapa', 'RegisterController@sapa_post');

// Route::get('/', 'HomeController@home');

// Route::post('/Register', 'AuthController@register');

// Route::get('/Register', 'AuthController@register');

// Route::get('/Welcome', 'AuthController@welcome');

// Route::post('/Welcome', 'AuthController@welcome');

// Route::get('/master', function() {
//     return view('/layout/master');
// });

Route::get('/', function() {
    return view('/table.table');
});

Route::get('/data-table', function() {
    return view('/table.data-table');
});