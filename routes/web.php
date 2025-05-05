<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Shows list of all blog posts
Route::get('/posts', [PostController::class, 'index']);

// Shows a single post and its comments
Route::get('/posts/{id}', [PostController::class, 'show']);

// Handles new comment submission for a post
Route::post('/posts/{id}/comments', [CommentController::class, 'store']);

// Redirect root URL to blog post list
Route::get('/', function () {
    return redirect('/posts');
});
