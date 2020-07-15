<?php

use Illuminate\Support\Facades\Auth;
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

// ROUTES BACKOFFICE

Route::get('admin/welcome', 'AccueilController@indexAll');
Route::get('admin/services', 'ServiceController@indexAll');
Route::get('admin/blog', 'BlogController@indexAll');
Route::get('admin/blog-post', 'BlogPostController@indexAll');
Route::get('admin/contact', 'ContactController@indexAll');

// ROUTES CRUD

Route::resource('/navtitre', 'NavTitreController');


// JE SAIS PAS

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
