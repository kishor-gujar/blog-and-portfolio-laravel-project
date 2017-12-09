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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactMessageController@get')->name('contact.get');
Route::post('/contact', 'ContactMessageController@post')->name('contact.post');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('blog.category/{category}/{slug?}', 'BlogController@category')->name('blog.category');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}/{slug?}', 'BlogController@single')->name('blog.single');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio.gallery', 'PortfolioController@gallery')->name('portfolio.gallery');
Route::get('/portfolio.category/{category}/{slug?}', 'PortfolioController@category')->name('portfolio.category');
Route::get('/portfolio/{id}/{slug?}', 'PortfolioController@single')->name('portfolio.single');

Auth::routes();

Route::middleware('auth')->group(function () {
  Route::get('/account', 'ProfileController@account')->name('account');
  Route::get('/account.edit', 'ProfileController@edit')->name('account.edit');
  Route::post('/account.edit', 'ProfileController@post')->name('account.post');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
