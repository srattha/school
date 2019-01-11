<?php

//use Illuminate\Http\Request;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: GET,POST,PUT,PATCH,DELETE');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );
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
//admin

Route::get("admin-user","Api\UserController@lists");
Route::put("admin-user-add","Api\UserController@add");
Route::put("admin-user-update","Api\UserController@update");
Route::post("admin-user-delete","Api\UserController@delete");

Route::get("admin-news","Api\NewsController@lists");
Route::put("admin-news-add","Api\NewsController@add");
Route::put("admin-news-update","Api\NewsController@update");
Route::post("admin-news-delete","Api\NewsController@delete");
