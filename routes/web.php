<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/detail/{id}','HomeController@detail')->name('detail');
Route::get('/trend','HomeController@trend')->name('trend');
Route::get('/setting', 'SettingController@index')->name('setting');
Route::get('/alarm','HomeController@alarm')->name('alarm');
Route::get('/data','HomeController@data')->name('data');
