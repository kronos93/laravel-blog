<?php

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

Route::redirect('/', 'blog');

Auth::routes();

// Route::resource('blog', 'BlogController');
Route::get('blog','BlogController@index')->name('blog.index');
Route::get('blog/{post}','BlogController@show')->name('blog.show');
Route::get('categoria/{category}','CategoryController@show')->name('category.show');
Route::get('etiqueta/{tag}','TagController@show')->name('tag.show');
