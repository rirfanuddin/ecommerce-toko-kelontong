<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Basic routes API
Route::group(['prefix' => 'basic', 'middleware' => ['basicAuth']], function()
{
    Route::post('role', 'Api\JwtAuthenticateController@createRole');
    Route::post('permission', 'Api\JwtAuthenticateController@createPermission');
    Route::post('add-admin-core', 'Api\JwtAuthenticateController@addadmincore');

    Route::post('assign-role', 'Api\JwtAuthenticateController@assignRole');
    Route::post('attach-permission', 'Api\JwtAuthenticateController@attachPermission');
});

Route::group(['middleware' => ['basicAuth']], function()
{
    // =================================beginning of admin-core=================================

    Route::group(['prefix' => 'admin-core'], function(){
        Route::post('login', 'Api\JwtAuthenticateController@authenticate');
        Route::group(['middleware' => ['ability:admin-core,4']], function()
        {                                        
            Route::group(['prefix' => 'admin'], function()
            {                                        
                Route::get('/', 'Api\AdminCoreController@admin_index');
                Route::get('/{id}', 'Api\AdminCoreController@admin_show');
                Route::post('/', 'Api\AdminCoreController@admin_register');
                Route::put('/{id}', 'Api\AdminCoreController@admin_edit');
                // Route::put('/delete/{id}', 'Api\AdminCoreController@admin_delete');
            });                                                  
            Route::group(['prefix' => 'user'], function()
            {                                        
                Route::get('/', 'Api\AdminController@user_index');
                Route::get('/{id}', 'Api\AdminController@user_show');
            });
            Route::group(['prefix' => 'shop'], function()
            {                                        
                Route::post('/register', 'Api\ShopController@register');
                Route::get('/', 'Api\AdminController@shop_index');
                Route::get('/{id}', 'Api\AdminController@shop_show');
                Route::put('/{id}', 'Api\AdminController@shop_edit');
                // Route::delete('/{id}', 'Api\AdminController@shop_delete');
            });         
        });
    }); 
    
    Route::group(['prefix' => 'province', 'middleware' => ['ability:admin-core,4']], function()
    {
        Route::get('/', 'Api\ProvinceController@index');
        Route::get('/{id}', 'Api\ProvinceController@show');
        Route::post('/', 'Api\ProvinceController@store');
        Route::put('/{id}', 'Api\ProvinceController@edit');
        Route::delete('/{id}', 'Api\ProvinceController@delete');
    });
    
    Route::group(['prefix' => 'city', 'middleware' => ['ability:admin-core,4']], function()
    {            
        Route::get('/{province?}', 'Api\CityController@index');
        Route::get('/{id}', 'Api\CityController@show');
        Route::post('/', 'Api\CityController@store');
        Route::put('/{id}', 'Api\CityController@edit');
        Route::delete('/{id}', 'Api\CityController@delete');
    });

    Route::group(['prefix' => 'sub-district', 'middleware' => ['ability:admin-core,4']], function()
    {            
        Route::get('/{city?}', 'Api\SubDistrictController@index');
        Route::get('/id/{id}', 'Api\SubDistrictController@show');
        Route::post('/', 'Api\SubDistrictController@store');
        Route::put('/{id}', 'Api\SubDistrictController@edit');
        Route::delete('/{id}', 'Api\SubDistrictController@delete');
    });

    Route::group(['prefix' => 'village', 'middleware' => ['ability:admin-core,4']], function()
    {                        
        Route::get('/{subdistrict?}', 'Api\VillageController@index');
        Route::get('/id/{id}', 'Api\VillageController@show');
        Route::post('/', 'Api\VillageController@store');
        Route::put('/{id}', 'Api\VillageController@edit');
        Route::delete('/{id}', 'Api\VillageController@delete');
    });

    Route::group(['prefix' => 'transportation', 'middleware' => ['ability:admin-core,4']], function()
    {                                
        Route::get('/', 'Api\UserTransportationController@index');
        Route::get('/{id}', 'Api\UserTransportationController@show');
        Route::post('/', 'Api\UserTransportationController@store');
        Route::put('/{id}', 'Api\UserTransportationController@edit');
        Route::delete('/{id}', 'Api\UserTransportationController@delete');
    });

    Route::group(['prefix' => 'category', 'middleware' => ['ability:admin-core,4']], function()
    {                                        
        Route::get('/', 'Api\CategoryController@index');
        Route::get('/{id}', 'Api\CategoryController@show');
        Route::post('/', 'Api\CategoryController@store');
        Route::put('/{id}', 'Api\CategoryController@edit');
        Route::delete('/{id}', 'Api\CategoryController@delete');
    });

    Route::group(['prefix' => 'payment', 'middleware' => ['ability:admin-core,4']], function()
    {                                        
        Route::get('/', 'Api\PaymentController@index');
        Route::get('/{id}', 'Api\PaymentController@show');
        Route::post('/', 'Api\PaymentController@store');
        Route::put('/{id}', 'Api\PaymentController@edit');
        Route::put('/delete/{id}', 'Api\PaymentController@delete');
    });

    // =================================end of admin-core==================================
    // =================================beginning of admin=================================

    Route::group(['prefix' => 'admin'], function(){
        Route::post('login', 'Api\JwtAuthenticateController@authenticate');
        Route::group(['middleware' => ['ability:admin,3']], function()
        {                                        
            Route::group(['prefix' => 'user'], function()
            {                                        
                Route::get('/', 'Api\AdminController@user_index');
                Route::get('/{id}', 'Api\AdminController@user_show');
            });
            Route::group(['prefix' => 'shop'], function()
            {                                        
                Route::post('/register', 'Api\ShopController@register');
                Route::get('/', 'Api\AdminController@shop_index');
                Route::get('/{id}', 'Api\AdminController@shop_show');
                Route::put('/{id}', 'Api\AdminController@shop_edit');
                // Route::delete('/{id}', 'Api\AdminController@shop_delete');
            });
            Route::group(['prefix' => 'product'], function()
            {
                Route::get('/', 'Api\AdminController@product_index');
                Route::get('/{id}', 'Api\ProductController@show');
                Route::post('/', 'Api\ProductController@store');
                Route::put('/{id}', 'Api\ProductController@edit');
                Route::delete('/{id}', 'Api\ProductController@delete');
            });
        });
    });

    // =================================end of admin======================================
    // =================================beginning of shop=================================

    Route::group(['prefix' => 'shop'], function(){
        Route::post('login', 'Api\JwtAuthenticateController@authenticate');
        Route::group(['middleware' => ['ability:shop,2']], function()
        {                                        
            Route::group(['prefix' => 'product'], function()
            {                                        
                Route::post('/', 'Api\ProductController@store');
                Route::get('/{id}', 'Api\ProductController@show');
                Route::put('/{id}', 'Api\ProductController@edit');
                Route::delete('/{id}', 'Api\ProductController@delete
                ');
            });            
        });
    });

    // =================================end of shop=======================================
    // =================================beginning of user=================================

    Route::group(['prefix' => 'user'], function(){
        Route::post('login', 'Api\JwtAuthenticateController@authenticate');
        Route::post('register', 'Api\UserController@register');
        Route::group(['middleware' => ['ability:user,1']], function()
        {
            Route::group(['prefix' => 'address'], function()
            {
                Route::get('/{id}', 'Api\AddressController@show');
                Route::post('/', 'Api\AddressController@store');
                Route::put('/{id}', 'Api\AddressController@edit');
            });
        });
    }); 

    // =================================end of user=================================

});
