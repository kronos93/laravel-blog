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
// Pages
Route::get('blog','BlogController@index')->name('blog.index');
Route::get('blog/{post}','BlogController@show')->name('blog.show');
Route::get('categorias/{category}','CategoryController@show')->name('categories.show');
Route::get('etiquetas/{tag}','TagController@show')->name('tags.show'); // TODO: Conflict

// Admin


Route::get('etiquetas','TagController@index')->name('tags.index');
Route::get('etiquetas/crear','TagController@create')->name('tags.create');// TODO: Conflict


Route::get('categorias','CategoryController@index')->name('categories.index');
Route::get('posts','PostController@index')->name('posts.index');
