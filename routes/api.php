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

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

Route::resource('merchant', 'MerchantController', ['only' => [
    'getList', 'create','update','getById','destroy','getProductsByMerchantId'
]]);

Route::resource('product', 'ProductController', ['only' => [
    'getList', 'create','update','getById','destroy'
]]);


Route::group(['middleware' => 'auth:api', 'prefix' => '/v1/'], function () {

    /** Merchant API  */
    Route::get('merchants/', 'Api\MerchantController@getList');
    Route::post('merchants/', 'Api\MerchantController@create');
    Route::put('merchants/{merchantId}/', 'Api\MerchantController@update')->where('merchantId', '\d+');
    Route::get('merchants/{merchantId}/', 'Api\MerchantController@getById')->where('merchantId', '\d+');
    Route::get('merchants/{merchantId}/products/', 'Api\MerchantController@getProductsByMerchantId')->where('merchantId', '\d+');
    Route::delete('merchants/{merchantId}/', 'Api\MerchantController@destroy')->where('merchantId', '\d+');

    /** Product API  */
    Route::get('products/', 'Api\ProductController@getList');
    Route::post('products/', 'Api\ProductController@create');
    Route::put('products/{productId}/', 'Api\ProductController@update')->where('productId', '\d+');
    Route::get('products/{productId}/', 'Api\ProductController@getById')->where('productId', '\d+');
    Route::delete('products/{productId}/', 'Api\ProductController@destroy')->where('productId', '\d+');

});