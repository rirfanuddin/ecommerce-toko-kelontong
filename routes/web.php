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
Route::get('home', 'HomeController@index');

Route::get('/', 'Web\MainController@index')->name('main.index');

Route::get('/produk/tes', 'Web\MainController@detailProduk')->name('main.detailProduk');

Auth::routes();

Route::group(['prefix' => 'a', 'middleware' => 'admin'], function(){
    Route::get('home', 'Web\AdminController@home');    
});

Route::group(['prefix' => 'p', 'middleware' => 'pendamping'], function(){
    Route::get('home', 'Web\PendampingController@home');
});

Route::group(['prefix' => 't', 'middleware' => 'toko'], function(){
    Route::get('home', 'Web\TokoController@home');
});

Route::group(['prefix' => 'u', 'middleware' => 'user'], function(){
    Route::get('home', 'Web\UserController@home')->name('user.home');
    Route::get('suka', 'Web\UserController@suka')->name('user.suka');
    Route::get('keranjang', 'Web\UserController@keranjang')->name('user.keranjang');
    Route::get('checkout', 'Web\UserController@checkout')->name('user.checkout');
    Route::get('profil', 'Web\UserController@profil')->name('user.profil');
    Route::get('setting', 'Web\UserController@setting')->name('user.setting');
});