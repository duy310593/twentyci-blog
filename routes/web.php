<?php

/* === FRONTEND === */

/* Home */
Route::get('/', function () {
    return view('welcome');
});

/* === BACKEND === */

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    /* Posts */
    Route::resource('posts', 'PostController')->except(['show']);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
