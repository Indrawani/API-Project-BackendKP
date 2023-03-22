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

Route::post('register', 'Api\AuthController@register');
Route::post('login','Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('umkm','Api\UMKMController@index');
    Route::get('umkm/{id}', 'Api\UMKMController@show');
    Route::post('umkm', 'Api\UMKMController@store');
    Route::put('umkm/{id}', 'Api\UMKMController@update');
    Route::delete('umkm/{id}','Api\UMKMController@destroy');
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
