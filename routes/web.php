<?php

Route::get('/', function () {
    return view('user.blog');
})->name('home');

Route::get('resume', function () {
    return view('user.resume');
})->name('resume');

Route::get('post', function () {
    return view('user.post');
})->name('post');

Route::get('admin/home', function () {
    return view('admin.home');
})->name('admin');

Route::get('admin/post', function () {
    return view('admin.post.post');
});

Route::get('admin/tag', function () {
    return view('admin.tag.tag');
});

Route::get('admin/category', function () {
    return view('admin.category.category');
});
