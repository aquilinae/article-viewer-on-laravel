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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);

/*
Route::get('post/create',      ['as' => 'post.create', 'uses' => 'PostController@create']);
Route::post('post',            ['as' => 'post.store',  'uses' => 'PostController@store']);
Route::get('post/{post}',      ['as' => 'post.store',  'uses' => 'PostController@show']);
Route::get('post/{post}/edit', ['as' => 'post.edit',   'uses' => 'PostController@edit']);
Route::post('post/{post}',     ['as' => 'post.update', 'uses' => 'PostController@update']);
*/

// Эта запись делает то же самое, что и 5 строк выше
$router->resource('post', 'PostController');