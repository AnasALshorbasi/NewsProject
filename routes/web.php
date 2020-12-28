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

Route::get('login','AuthController@login')->name('login');
Route::post('authenticate','AuthController@authenticate')->name('authenticate');
Route::get('logout','AuthController@logout')->name('logout');
Route::get('register','AuthController@register')->name('register');
Route::post('register','AuthController@do_register')->name('do_register');



Route::get('/', 'FrontsiteController@home')->name('frontsite.home');
Route::get('/single', 'FrontsiteController@single')->name('frontsite.single');
Route::get('/detils/{id}', 'FrontsiteController@senddetils')->name('front.detils');
Route::get('/contact', 'FrontsiteController@contact')->name('frontsite.contact');
Route::post('/contact', 'FrontsiteController@store')->name('front.contact');



Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function (){
    Route::get('/','DashboardController@index')->name('home');
    Route::resource('posts', 'PostController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController');
    Route::resource('contacts', 'ContactController');


});
