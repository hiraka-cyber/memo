@extends('layouts.app')


@section('content')
<form method="POST" action="{{ route('submit',['id' => $memo->id])}}">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$memo->title}}" maxlength="24">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" name="content" value="{{$memo->content}}" maxlength="60">
  </div>
  <a href="{{route('home') }}" class="btn btn-primary">Back</a>
  @if($memo->id == 0)
  <button type="submit" class="btn btn-success">Insert</button>
  @else
  <button type="submit" class="btn btn-success">Application</button>
  @endif
</form>
@endsection
