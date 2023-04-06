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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/blog','BlogController');
//Route::resource('/posts.show','$category->id');
Route::resource('posts','PostsController');
Route::resource('services', 'ServicesController');
Route::resource('aboutus','AboutUSController');
Route::resource('laundry','LaundryController');
//Route::resource('cart','ServicesController');
