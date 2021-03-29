@extends('author.base')

@section ('title', 'index')

@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Email</th>
        <th scope="col">Biography</th>
        <th scope="col">Website</th>
        <th scope="col">Picture</th>

      </tr>
    </thead>
    <tbody>
      @foreach( $authors as $key => $author)
        <tr>
          <th scope="row">{{$author->id}}</th>
          <td>{{$author->name}}</td>
          <td>{{$author->lastname}}</td>
          <td>{{$author->email}}</td>
          <td>{{$author->detail->biography}}</td>
          <td>{{$author->detail->website}}</td>
          <td><img src="{{$author->detail->picture}}" width= "250"></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
