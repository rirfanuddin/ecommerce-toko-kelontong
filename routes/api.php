<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Basic routes API
Route::group(['prefix' => 'basic', 'middleware' => ['basicAuth']], function()
{
    Route::post('role', 'JwtAuthenticateController@createRole');
    Route::post('permission', 'JwtAuthenticateController@createPermission');
    Route::post('add-admin-core', 'JwtAuthenticateController@addadmincore');

    Route::post('assign-role', 'JwtAuthenticateController@assignRole');
    Route::post('attach-permission', 'JwtAuthenticateController@attachPermission');    
});

Route::group(['middleware' => ['basicAuth']], function()
{
    // =================================beginning of admin-core=================================
    Route::group(['prefix' => 'admin-core'], function(){
        Route::post('login', 'JwtAuthenticateController@authenticate');
        Route::group(['middleware' => ['ability:admin-core,4']], function()
        {                                        
            Route::group(['prefix' => 'admin'], function()
            {                                        
                Route::get('/', 'AdminCoreController@admin_index');
                Route::get('/{id}', 'AdminCoreController@admin_show');
                Route::post('/', 'AdminCoreController@admin_register');
                Route::put('/{id}', 'AdminCoreController@admin_edit');
                // Route::put('/delete/{id}', 'AdminCoreController@admin_delete');
            });                                                  
            Route::group(['prefix' => 'user'], function()
            {                                        
                Route::get('/', 'AdminController@user_index');
                Route::get('/{id}', 'AdminController@user_show');            
            });
            Route::group(['prefix' => 'shop'], function()
            {                                        
                Route::post('/register', 'ShopController@register');
                Route::get('/', 'AdminController@shop_index');
                Route::get('/{id}', 'AdminController@shop_show');
                Route::put('/{id}', 'AdminController@shop_edit');
                // Route::delete('/{id}', 'AdminController@shop_delete');            
            });         
        });
    }); 
    
    Route::group(['prefix' => 'province', 'middleware' => ['ability:admin-core,4']], function()
    {
        Route::get('/', 'ProvinceController@index');
        Route::get('/{id}', 'ProvinceController@show');
        Route::post('/', 'ProvinceController@store');
        Route::put('/{id}', 'ProvinceController@edit');
        Route::delete('/{id}', 'ProvinceController@delete');                
    });
    
    Route::group(['prefix' => 'city', 'middleware' => ['ability:admin-core,4']], function()
    {            
        Route::get('/{province?}', 'CityController@index');
        Route::get('/{id}', 'CityController@show');
        Route::post('/', 'CityController@store');
        Route::put('/{id}', 'CityController@edit');
        Route::delete('/{id}', 'CityController@delete');
    });

    Route::group(['prefix' => 'sub-district', 'middleware' => ['ability:admin-core,4']], function()
    {            
        Route::get('/{city?}', 'SubDistrictController@index');
        Route::get('/id/{id}', 'SubDistrictController@show');
        Route::post('/', 'SubDistrictController@store');
        Route::put('/{id}', 'SubDistrictController@edit');
        Route::delete('/{id}', 'SubDistrictController@delete');
    });

    Route::group(['prefix' => 'village', 'middleware' => ['ability:admin-core,4']], function()
    {                        
        Route::get('/{subdistrict?}', 'VillageController@index');
        Route::get('/id/{id}', 'VillageController@show');
        Route::post('/', 'VillageController@store');
        Route::put('/{id}', 'VillageController@edit');
        Route::delete('/{id}', 'VillageController@delete');
    });

    Route::group(['prefix' => 'transportation', 'middleware' => ['ability:admin-core,4']], function()
    {                                
        Route::get('/', 'UserTransportationController@index');
        Route::get('/{id}', 'UserTransportationController@show');
        Route::post('/', 'UserTransportationController@store');
        Route::put('/{id}', 'UserTransportationController@edit');
        Route::delete('/{id}', 'UserTransportationController@delete');
    });

    Route::group(['prefix' => 'category', 'middleware' => ['ability:admin-core,4']], function()
    {                                        
        Route::get('/', 'CategoryController@index');
        Route::get('/{id}', 'CategoryController@show');  
        Route::post('/', 'CategoryController@store');
        Route::put('/{id}', 'CategoryController@edit');
        Route::delete('/{id}', 'CategoryController@delete');
    });

    Route::group(['prefix' => 'payment', 'middleware' => ['ability:admin-core,4']], function()
    {                                        
        Route::get('/', 'PaymentController@index');
        Route::get('/{id}', 'PaymentController@show');
        Route::post('/', 'PaymentController@store');
        Route::put('/{id}', 'PaymentController@edit');
        Route::put('/delete/{id}', 'PaymentController@delete');
    });

    

    // =================================end of admin-core==================================
    // =================================beginning of admin=================================

    Route::group(['prefix' => 'admin'], function(){
        Route::post('login', 'JwtAuthenticateController@authenticate');
        Route::group(['middleware' => ['ability:admin,3']], function()
        {                                        
            Route::group(['prefix' => 'user'], function()
            {                                        
                Route::get('/', 'AdminController@user_index');
                Route::get('/{id}', 'AdminController@user_show');            
            });
            Route::group(['prefix' => 'shop'], function()
            {                                        
                Route::post('/register', 'ShopController@register');
                Route::get('/', 'AdminController@shop_index');
                Route::get('/{id}', 'AdminController@shop_show');
                Route::put('/{id}', 'AdminController@shop_edit');
                // Route::delete('/{id}', 'AdminController@shop_delete');            
            });
        });
    });

    

    // =================================end of admin======================================
    // =================================beginning of shop=================================

    Route::group(['prefix' => 'shop'], function(){
        Route::post('login', 'JwtAuthenticateController@authenticate');
        Route::group(['middleware' => ['ability:shop,2']], function()
        {                                        
            Route::group(['prefix' => 'product'], function()
            {                                        
                Route::post('/', 'ProductController@store');                
                Route::get('/{id}', 'ProductController@show');
                Route::put('/{id}', 'ProductController@edit');
                Route::delete('/{id}', 'ProductController@delete
                ');
            });            
        });
    }); 


    // =================================end of shop=======================================
    // =================================beginning of user=================================

    Route::group(['prefix' => 'user'], function(){
        Route::post('login', 'JwtAuthenticateController@authenticate');
        Route::post('register', 'UserController@register');
    }); 




    // =================================end of user=================================

});











Route::get('address/{id}', 'AddressController@show');
Route::post('address', 'AddressController@store');
Route::put('address/{id}', 'AddressController@edit');