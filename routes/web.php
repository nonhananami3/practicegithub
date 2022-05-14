<?php

Route::post('/posts', 'PostController@store');

Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{post}/edit', 'PostController@edit');

Route::put('/posts/{post}', 'PostController@update');

Route::get('/posts/{post}', 'PostController@show');