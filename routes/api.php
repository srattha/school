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
#media group
Route::post("v1/media_group","Api\MediaGroupController@lists");
Route::post("v1/media_group/search","Api\MediaGroupController@search");
Route::post("v1/media_group/add","Api\MediaGroupController@add");
Route::post("v1/media_group/delete","Api\MediaGroupController@delete");

#media
Route::post("v1/media","Api\MediaController@lists");
Route::post("v1/media/addImage","Api\MediaController@addImage");
Route::post("v1/media/addVideo","Api\MediaController@addVideo");
Route::post("v1/media/search","Api\MediaController@search");
Route::put("v1/media","Api\MediaController@add");
Route::post("v1/media/delete","Api\MediaController@delete");
// home
Route::post("v1/home","Api\HomeController@lists");