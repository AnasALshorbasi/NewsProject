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

Route::post('login', 'Api\AuthController@login');
Route::get('logout','AuthController@logout')->name('logout');
Route::get('register','AuthController@register')->name('register');
Route::post('register','AuthController@do_register')->name('do_register');

Route::get('/', 'FrontsiteController@home')->name('frontsite.home');
Route::get('/single', 'FrontsiteController@single')->name('frontsite.single');
Route::get('/detils/{id}', 'FrontsiteController@senddetils')->name('front.detils');
Route::get('/contact', 'FrontsiteController@contact')->name('frontsite.contact');
Route::post('/contact', 'FrontsiteController@store')->name('front.contact');

Route::middleware('auth:api')->group(function (){
    Route::get('/','DashboardController@index')->name('home');
    Route::ApiResource('posts', 'Api\PostController');
    Route::ApiResource('categories', 'Api\CategoryController');
    Route::ApiResource('tags', 'Api\TagController');
    Route::ApiResource('users', 'Api\UserController');
    Route::ApiResource('contacts', 'ContactController');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});



