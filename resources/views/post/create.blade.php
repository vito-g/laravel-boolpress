@extends('post.base')

@section ('title', 'create-post')

@section('content')


  {{-- {{dd($authors)}} --}}
  <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  {{-- scriviamo a mano l'input di tipo **hidden**--}}
  {{-- <input name="_method" type="hidden" value="POST"> --}}

  {{-- oppure usiamo blade --}}
  {{-- @method('POST') --}}
    <div class="form-group">
      <label for="author_id">Authors</label>
      <select class="form-control" id="author_id" name="author_id">
        @foreach ($authors as $key => $author)
          <option value="{{$author->id}}">{{$author->name}}{{$author->lastname}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="title">Title-Post</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="title">
    </div>
    <div class="form-group">
      <label for="body">Body-Post</label>
      <textarea class="form-control" id="body" name="body" rows="16"></textarea>
    </div>
    {{-- Upload dell'immagine --}}
    <div class="form-group">
      <label for="picture">Immagine</label>
      <input type="file" class="form-control" id="picture" name="picture">
    </div>
    {{-- End - Upload dell'immagine --}}

    <div class="form-group">
     <label for="tags[]">Tags</label>
     <select multiple class="form-control" id="tags" name="tags[]">
       @foreach ($tags as $key => $tag)
         <option value="{{$tag->id}}">{{$tag->name}}</option>
       @endforeach
     </select>
    </div>

    <input type="submit" value="Save Post">
  </form>

@endsection
