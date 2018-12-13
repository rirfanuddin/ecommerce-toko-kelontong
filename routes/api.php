<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'admin'], function()
{
    // Route::group(['prefix' => 'base'], function()
    // {
    //     Route::post('role', 'AdminController@createRole');
    //     Route::post('permission', 'AdminController@createPermission');
    //     Route::post('assign-role', 'AdminController@assignRole');
    //     Route::post('attach-permission', 'AdminController@attachPermission');        
    // });
    Route::post('register', 'AdminController@register');
    Route::post('login', 'AdminController@login');
});

Route::group(['prefix' => 'customer'], function()
{
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');
});

Route::group(['prefix' => 'admin', 'middleware' => ['ability:admin,create-users']], function()
{
    Route::get('users', 'AdminController@index');
});

Route::group(['prefix' => 'master-parameter'], function()
{
    Route::get('province', 'ProvinceController@index');
    Route::get('province/{id}', 'ProvinceController@show');
    Route::post('province', 'ProvinceController@store');
    Route::put('province/{id}', 'ProvinceController@edit');
    Route::delete('province/{id}', 'ProvinceController@delete');
    
    Route::get('city/{province?}', 'CityController@index');
    Route::get('city/{id}', 'CityController@show');    
    Route::post('city', 'CityController@store');
    Route::put('city/{id}', 'CityController@edit');
    Route::delete('city/{id}', 'CityController@delete');

    Route::get('sub-district/{city?}', 'SubDistrictController@index');
    Route::get('sub-district/{id}', 'SubDistrictController@show');    
    Route::post('sub-district', 'SubDistrictController@store');
    Route::put('sub-district/{id}', 'SubDistrictController@edit');
    Route::delete('sub-district/{id}', 'SubDistrictController@delete');

    Route::get('village/{subdistrict?}', 'VillageController@index');
    Route::get('village/{id}', 'VillageController@show');    
    Route::post('village', 'VillageController@store');
    Route::put('village/{id}', 'VillageController@edit');
    Route::delete('village/{id}', 'VillageController@delete');

    Route::get('transportation', 'UserTransportationController@index');
    Route::get('transportation/{id}', 'UserTransportationController@show');
    Route::post('transportation', 'UserTransportationController@store');
    Route::put('transportation/{id}', 'UserTransportationController@edit');
    Route::delete('transportation/{id}', 'UserTransportationController@delete');

    Route::get('category', 'CategoryController@index');
    Route::get('category/{id}', 'CategoryController@show');
    Route::post('category', 'CategoryController@store');
    Route::put('category/{id}', 'CategoryController@edit');
    Route::delete('category/{id}', 'CategoryController@delete');

});

Route::get('address/{id}', 'AddressController@show');
Route::post('address', 'AddressController@store');
Route::put('address/{id}', 'AddressController@edit');