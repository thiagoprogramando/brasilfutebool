<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('users', UserController::class);

Route::post('/auth',[LoginController::class, 'auth'])->name('login.auth');
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/registrer',[UserController::class, 'create'])->name('login.create');


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/games', [IndexController::class, 'games'])->name('games');

Route::get('/index', [IndexController::class, 'index'])->name('index')->middleware('auth');
Route::get('/ticket', [IndexController::class, 'ticket'])->name('ticket')->middleware('auth');

// Route::get('/player', function () {
//     return view('player');
// });

// Route::get('/store', function () {
//     return view('store');
// });
