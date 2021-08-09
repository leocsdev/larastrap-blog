<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Auth::routes();

// Redirects
Route::redirect('/', '/posts');
Route::redirect('/home', '/posts');

// Show all posts
Route::get('/posts', [PostController::class, 'index']);

// Add a post, show form
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

// Save post
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

// Show single post
Route::get('/posts/{post}', [PostController::class, 'show']);

// Edit post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

// Update post
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');

// Delete post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');
