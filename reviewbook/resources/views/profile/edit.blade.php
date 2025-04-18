@extends('layouts.master')

@section('title')
Edit Profile
@endsection
@section('content')

<div class="container">
  <div class="text-center mb-4" data-aos="fade-up">
    <h1 class="fw-bold">Edit Profile</h1>
    <div class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd;"></div>
  </div>

<form action="/profile/{{$profile->id}}" method="POST">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
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
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Umur</label>
      <input type="number" name="age" value="{{$profile->age}}" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <textarea name="address" class="form-control" cols="30" rows="10">{{$profile->address}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection