<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('index');
});

Route::post('/register', 'AccountController@register');
//POST route
Route::post('/login', 'AccountController@login');

Route::get('/logout','AccountController@logout');