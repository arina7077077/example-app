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
  @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td><a href="/" class="btn btn-outline-warning">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
  </table>
@endsection
