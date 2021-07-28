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

Route::get('/user', 'App\Http\Controllers\UserController@showAll');
Route::get('/user/{id}', 'App\Http\Controllers\UserController@show');
Route::post('/user', 'App\Http\Controllers\UserController@store');
Route::put('/user/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('/user/{id}', 'App\Http\Controllers\UserController@delete');
Route::fallback(function(){
    return response()->json([ //url打錯，找不到介面顯示錯誤訊息:Nothing!!
        'message' => 'Nothing !! / Position Wrong!!'],404);
});