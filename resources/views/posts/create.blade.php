@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/posts" enctype="multipart/form-data" method="post">
  @csrf

    <div class="row">
      <div class="col-8 offset-2">
      <div class="row"><h1>Add New Post</h1></div>
        <div class="form-group row">
          <label for="title" class="col-form-label">Title</label>
          <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') }}" placeholder="Title"  autocomplete="title" autofocus>

          @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group row">
            <label for="body" class="col-form-label">Body</label>
            <textarea id="article-ckeditor" name="body" class="form-control @error('body') is-invalid @enderror" body="body">
            </textarea>
            @error('body')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row pt-4">
          <button class="btn btn-primary">Add New Post</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
