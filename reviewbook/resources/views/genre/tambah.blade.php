@extends('layouts.master')

@section('title')
Tambah Genre
@endsection
@section('content')
<form action="/genre" method="POST">
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
      <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection