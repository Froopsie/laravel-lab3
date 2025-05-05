<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Get all posts (with authors if you have a User model)
        $posts = Post::with('author')->get(); // You can skip 'author' if not implemented

        // Pass the list of posts to the Blade view: resources/views/posts/index.blade.php
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        // Retrieve the post by its ID, along with all related comments.
        $post = Post::with('comments')->findOrFail($id);

        // Pass the post to the Blade view: resources/views/posts/show.blade.php
        return view('posts.show', compact('post'));
    }
}
