<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layout/app');
});

Route::get('/login', function () {
    return view('login');
});


Route::fallback(function () { // taruh di paling bawah pokoknya
    return view('404');
});