<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tweet/view', [TweetController::class, 'view']);
