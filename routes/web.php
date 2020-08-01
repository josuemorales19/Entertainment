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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





//----------ANIME----------//


//Anime

Route::get('/anime', 'AnimeController@AnimeCatalog')->name('AnimeCatalog');

Route::get('/anime/{id}', 'AnimeController@Details')->name('AnimeDetails');

Route::post('/anime/comment', 'AnimeController@AddComment')->name('AnimeComments');

//Admin.Anime

Route::get('/admin/anime', 'AnimeController@Index');

Route::get('/admin/anime/create', "AnimeController@Create");

Route::post('/admin/anime/create', "AnimeController@Store");

Route::get('/admin/anime/delete/{id}', "AnimeController@Delete");

Route::delete('/admin/anime/delete', "AnimeController@Remove");

Route::get('/admin/anime/{id}', "AnimeController@Show");

Route::get('/admin/anime/edit/{id}', "AnimeController@Edit");

Route::post('/admin/anime/edit', "AnimeController@Update");






//----------MOVIES----------//


//Movies

Route::get('/movies', 'MovieController@MovieCatalog')->name('MovieCatalog');

Route::get('/movies/{id}', 'MovieController@Details')->name('MovieDetails');

Route::post('/movies/comment', 'MovieController@AddComment')->name('MovieComments');

//Admin.Movies

Route::get('/admin/movies', 'MovieController@Index');

Route::get('/admin/movies/create', "MovieController@Create");

Route::post('/admin/movies/create', "MovieController@Store");

Route::get('/admin/movies/delete/{id}', "MovieController@Delete");

Route::delete('/admin/movies/delete', "MovieController@Remove");

Route::get('/admin/movies/{id}', "MovieController@Show");

Route::get('/admin/movies/edit/{id}', "MovieController@Edit");

Route::post('/admin/movies/edit', "MovieController@Update");










//----------MUSIC----------//


//Music

Route::get('/music', 'MusicController@MusicCatalog')->name('MusicCatalog');

Route::get('/music/{id}', 'MusicController@Details')->name('MusicDetails');

Route::post('/music/comment', 'MusicController@AddComment')->name('MusicComments');


//Admin.Music

Route::get('/admin/music', 'MusicController@Index');

Route::get('/admin/music/create', "MusicController@Create");

Route::post('/admin/music/create', "MusicController@Store");

Route::get('/admin/music/delete/{id}', "MusicController@Delete");

Route::delete('/admin/music/delete', "MusicController@Remove");

Route::get('/admin/music/{id}', "MusicController@Show");

Route::get('/admin/music/edit/{id}', "MusicController@Edit");

Route::post('/admin/music/edit', "MusicController@Update");







//----------TVSHOWS----------//


//TVShows

Route::get('/tv_shows', 'TVShowController@TVShowCatalog')->name('TVShowCatalog');

Route::get('/tv_shows/{id}', 'TVShowController@Details')->name('TVShowDetails');

Route::post('/tv_shows/comment', 'TVShowController@AddComment')->name('TVSHowsComments');


//Admin.TVShows

Route::get('/admin/tv_shows', 'TVShowController@Index');

Route::get('/admin/tv_shows/create', "TVShowController@Create");

Route::post('/admin/tv_shows/create', "TVShowController@Store");

Route::get('/admin/tv_shows/delete/{id}', "TVShowController@Delete");

Route::delete('/admin/tv_shows/delete', "TVShowController@Remove");

Route::get('/admin/tv_shows/{id}', "TVShowController@Show");

Route::get('/admin/tv_shows/edit/{id}', "TVShowController@Edit");

Route::post('/admin/tv_shows/edit', "TVShowController@Update");

