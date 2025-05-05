<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {

        // Step 1: Validate the submitted form input.
        // The user must provide their name and a comment message.
        $validated = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);


        // Step 2: Attach the post ID to the validated data.
        // This links the comment to the correct blog post.
        $validated['post_id'] = $postId;

        // Step 3: Save the new comment to the database.
        Comment::create($validated);


        // Step 4: Redirect back to the post view with a success message.
        // The message will be displayed in the Blade view using session data.
        return redirect()->back()->with('success', 'Comment added!');
    }
}
