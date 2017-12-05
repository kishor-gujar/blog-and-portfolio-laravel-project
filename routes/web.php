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
    return view('home');
});

Route::get('/contact', 'ContactMessageController@get')->name('contact.get');
Route::post('/contact', 'ContactMessageController@post')->name('contact.post');

Route::get('/about', function () {
    return view('about');
});
Route::get('blog.category/{category}/{name?}', 'BlogController@category')->name('blog.category');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}/{slug?}', 'BlogController@single')->name('blog.single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
