@extends('layouts.master')

@section('content')

        <div class="col-md-8 blog-main">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Post</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Post By</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($posts as $post)

      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>
        <td>{{$post['user_id']}}</td>
        
        <td><a href="/posts/edit/{{ $post->id }}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="/posts/delete/{{ $post->id }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @endsection