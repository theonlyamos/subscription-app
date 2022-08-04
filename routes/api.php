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

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('websites', \App\Http\Controllers\WebsiteController::class);
    Route::apiResource('subscribers', \App\Http\Controllers\SubscriberController::class);
    //Route::apiResource('subscriptions', \App\Http\Controllers\SubscripstionController::class);
    Route::apiResource('posts', \App\Http\Controllers\PostController::class);
});
