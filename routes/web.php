<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/contact',[IndexController::class,'contact']);

Route::get('/job',[jobController::class,'index']);
Route::get('/blog',[PostController::class,'index']);
Route::get('/blog/create',[PostController::class,'create']);
Route::get('/blog/{id}',[PostController::class,'show']);