@extends('post.base')

@section ('title', 'create-post')

@section('content')



  <form action="{{route('post.store')}}" method="post">
  @csrf
  
  {{-- scriviamo a mano l'input di tipo **hidden**--}}
  {{-- <input name="_method" type="hidden" value="POST"> --}}

  {{-- oppure usiamo blade --}}
  {{-- @method('POST') --}}
    <div class="form-group">
      <label for="title">Title-Post</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="title">
    </div>
    <div class="form-group">
      <label for="body">Body-Post</label>
      <textarea class="form-control" id="body" name="body" rows="24"></textarea>
    </div>
    {{-- <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
      </select>
    </div> --}}
    <input type="submit" value="Save Post">
  </form>

@endsection
