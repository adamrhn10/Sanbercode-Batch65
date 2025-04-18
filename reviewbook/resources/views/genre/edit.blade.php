@extends('layouts.master')

@section('title')
Edit Genre
@endsection
@section('content')

<div class="container">
  <div class="text-center mb-4" data-aos="fade-up">
    <h1 class="fw-bold">Edit Genre</h1>
    <div class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd;"></div>
  </div>

<form action="/genre/{{$genre->id}}" method="POST">
    @method('put')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Genre</label>
      <input type="text" name="name" value="{{$genre->name}}" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <textarea name="description" class="form-control" cols="30" rows="10">{{$genre->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection