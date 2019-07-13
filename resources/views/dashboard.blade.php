@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3 class="mt-3 text-center">Your Blog Posts</h3>
                    <div class="row">
                        @if (count($posts) > 0)
                            @foreach ($posts as $post)
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <h4 class="text-truncate">{{ $post->title }}</h4>
                                    <p class="card-text text-truncate">{{ $post->body }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary"><a href="/posts/{{ $post->id }}/edit">Edit</a></button>
                                        <form action="/posts/{{ $post->id }}" class="ml-2" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                    {{-- <small class="text-muted">9 mins</small> --}}
                                    </div>
                                </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p class="text-center">It's so lonely over here</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
