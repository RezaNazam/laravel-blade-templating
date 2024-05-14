<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/widget', function () {
    return view('widget');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


