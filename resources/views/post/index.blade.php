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
        <th scope="col">Tags</th>
        <th scope="col">Images</th>
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
          <td>
            @foreach ($post->tags as $key => $tag)
              {{$tag->name}}
            @endforeach
          </td>
          <td>
            <img src="{{ asset($post->img) }}" width="100" alt="">
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
