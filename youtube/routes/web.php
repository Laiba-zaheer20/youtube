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

Route::get('video','VideoController@index')->name('video');
Route::post('saveVideo','videoController@store')->name('save');
Route::get('show','VideoController@show')->name('show');

Route::post('check','VideoController@checklogin')->name('check');
Route::post('checkSignIn','VideoController@checkSignIn')->name('checkSignIn');
Route::post('up','VideoController@up')->name('up');
Route::post('count','VideoController@count')->name('count');

Route::get('logout','VideoController@logout')->name('logout');
Route::get('channel','VideoController@channel')->name('channel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
