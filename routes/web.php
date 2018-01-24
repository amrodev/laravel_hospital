<?php

Route::get('/', function () {
    return view('admin.login');
});

Route::get('login', function () {
    return view('admin.login');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});
