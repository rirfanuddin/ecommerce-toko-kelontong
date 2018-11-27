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

Route::post('role', 'JwtAuthenticateController@createRole');
Route::post('permission', 'JwtAuthenticateController@createPermission');
Route::post('assign-role', 'JwtAuthenticateController@assignRole');
Route::post('attach-permission', 'JwtAuthenticateController@attachPermission');
Route::post('adduser', 'JwtAuthenticateController@adduser');

Route::group(['prefix' => 'api', 'middleware' => ['ability:admin,create-users']], function()
{
    Route::get('users', 'JwtAuthenticateController@index');
});

Route::post('authenticate', 'JwtAuthenticateController@authenticate');

Route::group(['prefix' => 'master-parameter'], function()
{
    Route::get('province', 'ProvinceController@index');
    Route::get('province/{id}', 'ProvinceController@show');
    Route::post('province', 'ProvinceController@store');
    Route::put('province/{id}', 'ProvinceController@edit');
    Route::delete('province/{id}', 'ProvinceController@delete');
    
    Route::get('city', 'CityController@index');
    Route::get('city/{id}', 'CityController@show');
    Route::get('city/province/{id}', 'CityController@showByProvince');
    Route::post('city', 'CityController@store');
    Route::put('city/{id}', 'CityController@edit');
    Route::delete('city/{id}', 'CityController@delete');

    Route::get('sub-district', 'SubDistrictController@index');
    Route::get('sub-district/{id}', 'SubDistrictController@show');
    Route::get('sub-district/city/{id}', 'SubDistrictController@showByCity');
    Route::post('sub-district', 'SubDistrictController@store');
    Route::put('sub-district/{id}', 'SubDistrictController@edit');
    Route::delete('sub-district/{id}', 'SubDistrictController@delete');

    Route::get('village', 'VillageController@index');
    Route::get('village/{id}', 'VillageController@show');
    Route::get('village/sub-district/{id}', 'VillageController@showBySubDistrict');
    Route::post('village', 'VillageController@store');
    Route::put('village/{id}', 'VillageController@edit');
    Route::delete('village/{id}', 'VillageController@delete');
});