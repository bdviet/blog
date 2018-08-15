<?php

//route user
Route::group(['namespace' => 'User'], function() {
	Route::get('post', 'PostController@index')->name('post');
	Route::get('resume', 'ResumeController@index')->name('resume');
	Route::get('/', 'HomeController@index')->name('home');
});


//route admin
Route::group(['namespace' => 'Admin'], function() {

    // admin.home Controller
	Route::get('admin/home', 'HomeController@index')-> name('admin.home');

    // Post Route
	Route::resource('admin/post', 'PostController');

    // Tag Route
	Route::resource('admin/tag', 'TagController');

    // Category Route
	Route::resource('admin/category', 'CategoryController');

	// User Route
	Route::resource('admin/user', 'UserController');
});
