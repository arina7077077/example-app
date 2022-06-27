@extends('admin.main')
@section('title')
Posts
@endsection
@section('content_header')
<h1>Posts</h1>
@endsection

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        <td><a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">Create new post</a></td>
  @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        @if($post->user_id == auth()->user()->id)
                        <td><a href="{{ route('admin.posts.update', $post) }}" class="btn btn-outline-warning">Update</a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
  </table>
@endsection

