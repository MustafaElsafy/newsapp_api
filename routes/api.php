<?php

use App\Models\User;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * @Author related
 */
Route::get('authors','App\Http\Controllers\Api\UserController@index');
Route::get('authors/{id}','App\Http\Controllers\Api\UserController@show');
Route::get('posts/author/{id}','App\Http\Controllers\Api\UserController@posts');
Route::get('comments/author/{id}','App\Http\Controllers\Api\UserController@comments');
// End Author

/**
 * @Category related
 */
Route::get('categories','App\Http\Controllers\Api\CategoryController@index');
Route::get('posts/category/{id}','App\Http\Controllers\Api\CategoryController@posts');
// End Category

/**
 * @Post related
 */
Route::get('posts','App\Http\Controllers\Api\PostController@index');
Route::get('posts/{id}','App\Http\Controllers\Api\PostController@show');
Route::get('comments/post/{id}','App\Http\Controllers\Api\PostController@comments');
// End Post

/**
 * @Comment related
 */
Route::get('comments','App\Http\Controllers\Api\CommentController@index');
// End Comment

/**
 * @Authentication related
 */
Route::post('register','App\Http\Controllers\Api\UserController@store');
Route::post('token','App\Http\Controllers\Api\UserController@getToken');
