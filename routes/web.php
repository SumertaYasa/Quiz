<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () { // taruh di paling bawah pokoknya
    return view('404');
});
