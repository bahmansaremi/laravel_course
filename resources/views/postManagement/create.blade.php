@extends('layout.master')
@section('title')
    Create New Post
@endsection

@section('content')
<br>
<br>
<br>
<h1>Create new post</h1>
<br>
<div>
<form class="mb-5" method="POST" action="{{route('post.store')}}">
  @csrf
    <label for="exampleInputEmail1" class="form-label">Title:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Discription:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</form>
<button type="button" class="btn btn-primary">Submit</button>
</div>
@endsection