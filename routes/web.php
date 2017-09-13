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


// get, post, push, destroy, resource, group


Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', 'UserController@index')->name('home');

	Route::resource('user', 'Usercontroller'); //chuẩn restfull

	Route::resource('category', 'CategoryController');

	Route::resource('post', 'PostController');
});


Route::group(['prefix' => 'admin'], function() {
	Route::get('login', 'VerifyController@getLogin')->name('admin.verify.getlogin');

	Route::post('login', 'VerifyController@postLogin')->name('admin.verify.postlogin');

	Route::group(['middleware' => 'checkuser'], function() {
		Route::resource('product', 'ProductController');
	});
});

