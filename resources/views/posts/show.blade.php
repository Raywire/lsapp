@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <a href="/posts" class="btn btn-secondary mb-2">Go Back</a>
        <h1>{{ $post->title }}</h1>
        <img class="pb-3 rounded mx-auto d-block img-fluid" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on {{ $post->created_at }} by <span class="text-primary">{{ $post->user->name }}</span></small>
        <hr>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal">
                    Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this post?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="/posts/{{ $post->id }}" class="float-right" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
@endsection
