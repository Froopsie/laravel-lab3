@extends('layouts.main')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>

    <hr>
    <h4>Comments</h4>

    @foreach ($post->comments as $comment)
        <div class="border rounded p-2 mb-2">
            <strong>{{ $comment->commenter_name }}</strong>:
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <hr>
    <h5>Leave a Comment</h5>

    <form method="POST" action="{{ url('/posts/' . $post->id . '/comments') }}">
        @csrf
        <div class="mb-3">
            <label>Your Name</label>
            <input type="text" name="commenter_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Your Comment</label>
            <textarea name="comment" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Post Comment</button>
    </form>
@endsection
