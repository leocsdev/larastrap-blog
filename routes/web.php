<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Auth::routes();

// PUBLIC ROUTES

// Redirected to show all posts, 
Route::redirect('/', '/posts');

// Show all posts
Route::get('/posts', [PostController::class, 'index']);

// Show single post
Route::get('/posts/{post}', [PostController::class, 'show']);



// PROTECTED ROUTES

Route::prefix('/posts')->middleware('auth')->group( function  () {
    // Add a post, show form
    Route::get('/create', [PostController::class, 'create']);

    // Save post
    Route::post('/', [PostController::class, 'store']);

    // Edit post
    Route::get('/{post}/edit', [PostController::class, 'edit']);

    // Update post
    Route::put('/{post}', [PostController::class, 'update']);

    // Delete post
    Route::delete('/{post}', [PostController::class, 'destroy']);
});
