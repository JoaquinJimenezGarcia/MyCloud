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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes for the main pages
Route::get('/documents', 'HomeController@documents')->name('documents');
Route::post('/documents/send', 'HomeController@documentsSend')->name('documentsSend');

Route::get('/images', 'HomeController@images')->name('images');
Route::post('/images/send', 'HomeController@imagesSend')->name('imagesSend');

Route::get('/films', 'HomeController@films')->name('films');
Route::post('/films/send', 'HomeController@filmsSend')->name('filmsSend');

Route::get('/music', 'HomeController@music')->name('music');
Route::post('/music/send', 'HomeController@musicSend')->name('musicSend');

Route::get('/otherdata', 'HomeController@otherdata')->name('otherdata');
Route::post('/otherdata/send', 'HomeController@otherdataSend')->name('otherdataSend');
