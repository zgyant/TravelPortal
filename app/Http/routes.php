<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', function () {
    return view('home');
})->name('home');
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

Route::post('/newpackage','DashController@newpackage');

Route::post('/newstory','DashController@newstory');

Route::post('/editpackage','DashController@editpackage');

Route::get('/booking','BookingController@bookpackage');

