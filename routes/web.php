<?php

use Illuminate\Support\Facades\Route;

// The Glitch/Boot Intro
Route::get('/', function () {
    return view('welcome');
});

// The Main Portfolio Page (pages/home.blade.php)
Route::get('/home', function () {
    return view('pages.home');
})->name('home');