@extends('layouts.app')

@section('content')
    <h1 class="text-center">Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img class="w-100" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8 my-auto">
                            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                            <small>Written {{ $post->created_at->diffForHumans() }} by <span class="text-primary">{{ $post->user->name }}</span></small>
                        </div>
                    </div>
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
