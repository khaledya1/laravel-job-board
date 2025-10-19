<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/',IndexController::class);
Route::get('/about',AboutController::class);
Route::get('/contact',ContactController::class);

route::resource('blog',PostController::class);
route::resource('comment',CommentController::class);
route::resource('tag',TagController::class);
