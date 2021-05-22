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
    return view('welcome');
});


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

Route::get('/table', function() {
    return view('/table.table');
});

Route::get('/data-table', function() {
    return view('/table.data-table');
});

//CRUD genre
Route::get('/genre', 'GenreController@index');
Route::get('/genre/create', 'GenreController@create');
Route::post('/genre', 'GenreController@store');
Route::get('/genre/{genre_id}', 'GenreController@show');
Route::get('/genre/{genre_id}/edit', 'GenreController@edit');
Route::put('/genre/{genre_id}', 'GenreController@update');
Route::delete('/genre/{genre_id}', 'GenreController@destroy');

//CRUD cast
Route::get('/cast', 'CastController@index');
Route::get('/cast/create', 'CastController@create');
Route::post('/cast', 'CastController@store');
Route::get('/cast/{cast_id}', 'castController@show');
Route::get('/cast/{cast_id}/edit', 'CastController@edit');
Route::put('/cast/{cast_id}', 'CastController@update');
Route::delete('/cast/{cast_id}', 'CastController@destroy');

Route::get('/profil', 'ProfilController@index');
Route::get('/profil/create', 'ProfilController@create');
Route::post('/profil', 'ProfilController@store');
