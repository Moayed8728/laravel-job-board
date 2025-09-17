<?php

use App\Http\Controllers\api\v1\PostApiController;


Route::prefix('v1')->group(function () {

    Route::apiResource('post', PostApiController::class);

});

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\TagController;
// use App\Http\Controllers\CommentController;


// Route::post('/blog',[PostController::class,'create']);
// Route::delete('/blog/{id}',[PostController::class,'delete']);
// Route::post('/comments',[CommentController::class,'create']);
// Route::post('/tags',[TagController::class,'create']);