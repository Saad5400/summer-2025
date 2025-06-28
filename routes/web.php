<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create']);
Route::get('/login', [LoginController::class, 'create']);
Route::get('/tweet/view', [TweetController::class, 'view']);
