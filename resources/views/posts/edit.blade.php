@extends('layouts.master')

@section('content')

        <div class="col-md-8 blog-main">

            <h1>Edit Post</h1>
            {{ $post->id }}

  <form method="POST" action="/editPost/{{ $post->id }}">
    <hr>
        {{csrf_field()}}

{{ method_field('PATCH') }}

<br>
    <div class="form-group">
      
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" >

    </div>



  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body" value="{{ $post->body }}" >{{ $post->body }}

    </textarea>
  </div>

  <hr>

      <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>

    </div>

      
      @include('layouts.error')



</form>



</div>

@endsection