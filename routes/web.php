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
Route::group(['middleware' => ['auth']], function() {

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
    
    //CRUD post
    Route::resource('post', 'PostController');
    // Route::get('/post', 'PostController@index');
    // Route::get('/post/create', 'PostController@create');
    // Route::post('/post', 'PostController@store');
    // Route::get('/post/{post_id}', 'PostController@show');
    // Route::get('/post/{post_id}/edit', 'PostController@edit');
    // Route::put('/post/{post_id}', 'PostController@update');
    // Route::delete('/post/{post_id}', 'PostController@destroy');
    
    Route::get('/table', function() {
        return view('/table.table');
    });
    
    Route::get('/data-table', function() {
        return view('/table.data-table');
    });
    
    //CRUD genre
    Route::resource('genre', 'GenreController')->except(['show']);
    // Route::get('/genre', 'GenreController@index');
    // Route::get('/genre/create', 'GenreController@create');
    // Route::post('/genre', 'GenreController@store');
    // Route::get('/genre/{genre_id}', 'GenreController@show');
    // Route::get('/genre/{genre_id}/edit', 'GenreController@edit');
    // Route::put('/genre/{genre_id}', 'GenreController@update');
    // Route::delete('/genre/{genre_id}', 'GenreController@destroy');
    
    //CRUD profil
    Route::resource('profil', 'ProfilController');
    // Route::get('/profil', 'ProfilController@index');
    // Route::get('/profil/create', 'ProfilController@create');
    // Route::post('/profil', 'ProfilController@store');
    
    Route::resource('user', 'UserController');
    // Route::get('/users', 'UserController@index');
    // Route::get('/users/create', 'UserController@create');
    // Route::post('/users', 'UserController@store');
    // Route::get('/users/{users_id}', 'UserController@show');
    
    //CRUD Film
    Route::resource('film', 'FilmController');
    // Route::get('/film', 'FilmController@index');
    // Route::get('/film/create', 'FilmController@create');
    // Route::post('/film', 'FilmController@store');
    // Route::get('/film/{film_id}', 'FilmController@show');
    // Route::get('/film/{film_id}/edit', 'FilmController@edit');
    // Route::put('/film/{film_id}', 'FilmController@update');
    // Route::delete('/film/{film_id}', 'FilmController@destroy');
    
    //CRUD cast
    Route::resource('cast', 'CastController');
    // Route::get('/cast', 'CastController@index');
    // Route::get('/cast/create', 'CastController@create');
    // Route::post('/cast', 'CastController@store');
    // Route::get('/cast/{cast_id}', 'castController@show');
    // Route::get('/cast/{cast_id}/edit', 'CastController@edit');
    // Route::put('/cast/{cast_id}', 'CastController@update');
    // Route::delete('/cast/{cast_id}', 'CastController@destroy');
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();

