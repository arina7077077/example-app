@extends('admin.main')
@section('title')
Comments
@endsection
@section('content_header')
<h1>Comments</h1>
@endsection

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">comment_id</th>
        <th scope="col">post_id</th>
        <th scope="col">content</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->post_id }}</td>
                <td>{{ $comment->content }}</td>

            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
