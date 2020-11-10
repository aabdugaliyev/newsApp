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
    return redirect('/news');
});

Route::get('/news', 'NewsController@getNews');
Route::post('/news/add', 'NewsController@createNews');
Route::get('/news/{id}', 'NewsController@getNewsById');
Route::get('/news/edit/{id}', 'NewsController@updateNews');
Route::get('/news/delete/{id}', 'NewsController@deleteNews');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
