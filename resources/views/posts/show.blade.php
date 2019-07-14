@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mb-2">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by <span class="text-primary">{{ $post->user->name }}</span></small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

            <form action="/posts/{{ $post->id }}" class="float-right" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endif
    @endif
@endsection
