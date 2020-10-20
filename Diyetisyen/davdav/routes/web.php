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
Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about') ;
Route::get('/services', 'PagesController@services') ;
Route::get('/tarif', 'PagesController@tarif') ;
Route::get('/blog', 'PagesController@blog') ;
Route::get('/diyet', 'PagesController@diyet') ;
Route::get('/contact', 'PagesController@contact') ;
Route::get('/sayfalar/listele', 'PagesController@sayfalistele') ;


Route::resource('sayfalar','SayfalarController');
Route::resource('yorumlar','YorumlarController');
Route::POST('yorumlar/store','YorumlarController@store')->name('yorumlar.store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
