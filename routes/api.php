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
});