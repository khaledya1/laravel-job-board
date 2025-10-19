<?php

use App\Http\Controllers\api\PostApiController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\TagController;


// Route::post('/blog',[PostController::class,'create']);
// Route::delete('/blog/{id}', [PostController::class, 'destroy']);

// Route::post('/comment',[CommentController::class,'create']);
// Route::delete('/comment/{id}', [CommentController::class, 'destroy']);

// Route::post('/tag',[TagController::class,'create']);
// Route::delete('/tag/{id}', [TagController::class, 'destroy']);
// Route::post('/tag',[TagController::class,'testManyToMany']);

Route::apiResource('post',PostApiController::class);