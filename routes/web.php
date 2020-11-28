<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'FrontsiteController@home')->name('frontsite.home');
Route::get('/single', 'FrontsiteController@single')->name('frontsite.single');
Route::get('/contact', 'FrontsiteController@contact')->name('frontsite.contact');

Route::namespace('Dashboard')->name('dashboard.')->prefix('admin')->group(function (){
    Route::get('/','DashboardController@index');
    Route::resource('posts', 'PostController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController');

});
