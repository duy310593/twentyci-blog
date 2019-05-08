<?php
use App\Services\Post as PostService;

/* === FRONTEND === */

/* Home */
Route::get('/', function () {
    $posts = PostService::getAll();
    return view('home2', ['posts' => $posts]);
});

/* === BACKEND === */

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    /* Posts */
    Route::resource('posts', 'PostController')->except(['show']);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
