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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'testController@let');

Route::get('/post/{id}/{name}', 'testController@fullPage');

Route::get('/long/url/link/example', array('as' => 'admin', function () {
	$url = route('admin');
    return 'this is admin '.$url;
}));

Route::resource('/posts', 'postController');

Route::get('/contact', 'testController@contact');

Route::get('/blog', 'blogController@index');
