<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//throttle[3 task per 2 minute] 
Route::group(['prefix' => '/v1', 'middleware' => [/* 'throttle:3,2' */]], function () {

    Route::name('api.v1.')->group(function () {
        Route::resource('/categories', 'Category\CategoriesController');
    });
});
