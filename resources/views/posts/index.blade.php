@extends('layouts.app')

@section('content')
    <h1 class="text-center">Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>Written on {{ $post->created_at }} by <span class="text-primary">{{ $post->user->name }}</span></small>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection
