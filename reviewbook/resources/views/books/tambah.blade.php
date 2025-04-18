@extends('layouts.master')

@section('title')
Tambah Buku
@endsection
@section('content')

<div class="container">
  <div class="text-center mb-4" data-aos="fade-up">
    <h1 class="fw-bold">Tambah Buku</h1>
    <div class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd;"></div>
  </div>

<form action="/books" method="POST" enctype="multipart/form-data">
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
        <label for="exampleInputEmail1" class="form-label">Genre</label>
        <select name="genre_id" id="" class="form-control">
            <option value="">--Pilih Genre--</option>
            @forelse ($genre as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @empty
                <option value="">Genre tidak ada</option>
            @endforelse
        </select>
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Summary</label>
      <textarea name="summary" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Image</label>
      <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Stok</label>
        <input type="text" name="stok" class="form-control">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection