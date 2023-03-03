<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrer', function () {
    return view('registrer');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/player', function () {
    return view('player');
});

Route::get('/store', function () {
    return view('store');
});

