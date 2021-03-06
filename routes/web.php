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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('products', 'ProductController');


Route::get('create', function () {
    return view('products.create');
});

Route::get('descargar-productos', 'ProductController@pdf')->name('products.pdf');



Route::get('admin', function(){

	return view('admin.dashboard');

});

Route::get('/', function(){

	return view('portal.index');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
