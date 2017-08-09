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
    return view('index');
});

Route::get('/test', function() {
	return 'OK';
})->name('user.test');

Route::get('/post/{id}', function($id) {
	return 'Post has id ' . $id;
});

Route::get('/post/{id}/{name}', function($id, $name) {
	return 'Post has id ' . $id . ' and name: ' . $name;
});

Route::group(['prefix' => 'admin'], function() {

	Route::get('user', function() {
		return 'User';
	});

	Route::get('post', function() {
		return 'Post';
	});
});

// get, post, push, destroy, resource, group


Route::resource('user', 'Usercontroller'); //chuẩn restfull
