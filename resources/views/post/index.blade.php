@extends('post.base')

@section ('title', 'index')

@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Author</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $posts as $key => $post)
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          {{-- Per Scendere nella Tab Secondaria: --}}
          <td>{{$post->author->lastname}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
