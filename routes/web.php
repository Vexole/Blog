<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

//Route::get('blog', 'BlogController@getIndex');

Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Auth::routes();

Route::get('home', 'HomeController@index');
