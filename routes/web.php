<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('admin.login');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
