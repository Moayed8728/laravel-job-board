<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;


// Public Single page Routes

Route::get('/',IndexController::class);
Route::get('/about', AboutController::class);   
Route::get('/contact', ContactController::class); 

Route::get('/job',[JobController::class,'index']);

// Public Resource Routes
Route::resource('tags', TagController::class);

// Authentication Routes
Route::get('/signup',[AuthController::class,'showSignupForm']);
Route::get('/login',[AuthController::class,'showLoginForm']);

Route::post('/signup',[AuthController::class,'signup'])->name('signup');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout']);

// Protected Routes
Route::middleware('auth')->group(function () {
    
//admin
       Route::middleware('role:admin')->group(function () {
    
            Route::delete('/blog/{post}', [PostController::class,'destroy']);
    });

    //editor,admin
     Route::middleware('role:editor,admin')->group(function () {
        
        Route::get('/blog/create', [PostController::class,'create']);
    Route::post('/blog', [PostController::class,'store']);

    Route::middleware('can:update,post')->group(function () {
        Route::get('/blog/{post}/edit', [PostController::class,'edit'])->can('update', 'post');
        Route::patch('/blog/{post}', [PostController::class,'update'])->can('update', 'post');; 

    });

    });


    //viewer,editor,admin
    Route::middleware('role:viewer,editor,admin')->group(function () {
    
        Route::get('/blog', [PostController::class, 'index']);
        Route::get('/blog/{post}', [PostController::class,'show']);
        Route::resource('comments', CommentController::class);
    });

});
   
// protected Only Me Routes
Route::middleware('onlyMe')->group(function () {

    Route::get('/about', AboutController::class); 

});












//Route::get('/tags/test-many',[TagController::class,'testManyToMany']);
