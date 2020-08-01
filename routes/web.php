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

Route::get('/', function () {
    return view('welcome');
});

// albums

Route::get('/albums', 'AlbumsController@AlbumsStore')->name('AlbumsStore');

Route::get('/albums/{id}', 'AlbumsController@Details')->name('AlbumsDetails');

Route::post('/albums/comment', 'AlbumsController@AddComment')->name('AlbumsComments');


// admin albums

Route::get('/admin/albums', 'AlbumsController@Index');

Route::get('/admin/albums/create', "AlbumsController@Create");

Route::post('/admin/albums/create', "AlbumsController@Store");

Route::get('/admin/albums/delete/{id}', "AlbumsController@Delete");

Route::get('/admin/albums/edit/{id}', "AlbumsController@Edit");

Route::get('/admin/albums/{id}', "AlbumsController@Show");

Route::post('/admin/albums/edit', "AlbumsController@Update");

Route::delete('/admin/albums/delete', "AlbumsController@Remove");


// Gpus

Route::get('/gpus', 'GpusController@GpusStore')->name('GpusStore');

Route::get('/gpus/{id}', 'GpusController@Details')->name('GpusDetails');

Route::post('/gpus/comment', 'GpusController@AddComment')->name('GpusComments');

// Gpus admin

Route::get('/admin/gpus', 'GpusController@Index');

Route::get('/admin/gpus/create', "GpusController@Create");

Route::post('/admin/gpus/create', "GpusController@Store");

Route::get('/admin/gpus/delete/{id}', "GpusController@Delete");

Route::get('/admin/gpus/edit/{id}', "GpusController@Edit");

Route::get('/admin/gpus/{id}', "GpusController@Show");

Route::post('/admin/gpus/edit', "GpusController@Update");

Route::delete('/admin/gpus/delete', "GpusController@Remove");


// Movies

Route::get('/movies', 'MoviesController@MoviesStore')->name('MoviesStore');

Route::get('/movies/{id}', 'MoviesController@Details')->name('MoviesDetails');

Route::post('/movies/comment', 'MoviesController@AddComment')->name('MoviesComments');

// Movies admin

Route::get('/admin/movies', 'MoviesController@Index');

Route::get('/admin/movies/create', "MoviesController@Create");

Route::post('/admin/movies/create', "MoviesController@Store");

Route::get('/admin/movies/delete/{id}', "MoviesController@Delete");

Route::get('/admin/movies/edit/{id}', "MoviesController@Edit");

Route::get('/admin/movies/{id}', "MoviesController@Show");

Route::post('/admin/movies/edit', "MoviesController@Update");

Route::delete('/admin/movies/delete', "MoviesController@Remove");


// Videogames

Route::get('/videogames', 'VideogamesController@VideogamesStore')->name('VideogamesStore');

Route::get('/videogames/{id}', 'VideogamesController@Details')->name('VideogamesDetails');

Route::post('/videogames/comment', 'VideogamesController@AddComment')->name('VideogamesComments');

// Videogames.Admin

Route::get('/admin/videogames', 'VideogamesController@Index');

Route::get('/admin/videogames/create', "VideogamesController@Create");

Route::post('/admin/videogames/create', "VideogamesController@Store");

Route::get('/admin/videogames/delete/{id}', "VideogamesController@Delete");

Route::get('/admin/videogames/edit/{id}', "VideogamesController@Edit");

Route::get('/admin/videogames/{id}', "VideogamesController@Show");

Route::post('/admin/videogames/edit', "VideogamesController@Update");

Route::delete('/admin/videogames/delete', "VideogamesController@Remove");



Route::get('/mongodb', function () {
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

