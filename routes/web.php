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

Route::get('/', 'Web\MainController@index')->name('main.index');
Auth::routes();

Route::group(['prefix' => 'a', 'middleware' => 'admin'], function(){
    Route::get('home', 'HomeController@admintest');
    Route::get('home2', 'HomeController@admintest2');
});

Route::group(['prefix' => 'p', 'middleware' => 'pendamping'], function(){
    Route::get('home', 'HomeController@pendampingtest');
});

Route::group(['prefix' => 't', 'middleware' => 'toko'], function(){
    Route::get('home', 'HomeController@tokotest');
});

Route::group(['prefix' => 'u', 'middleware' => 'user'], function(){
    Route::get('home', 'HomeController@index')->name('home');
});