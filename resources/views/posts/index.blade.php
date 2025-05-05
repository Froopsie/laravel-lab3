@extends('layouts.main')

@section('content')
    <h2>All Blog Posts</h2>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $post->title }}</h4>
                <p>{{ \Illuminate\Support\Str::limit($post->content, 150) }}</p>
                <a href="{{ url('/posts/' . $post->id) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    @endforeach
@endsection
