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

Route::resource('/', 'AccueilController');

Route::resource('/blog', 'BlogController');

Route::resource('/blog-post', 'BlogPostController');

Route::resource('/contact', 'ContactController');

Route::resource('/elements', 'ElementController');

Route::resource('/services', 'ServiceController');

// JE SAIS PAS

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
