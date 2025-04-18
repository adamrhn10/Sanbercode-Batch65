@extends('layouts.master')

@section('title')
Detail Genre
@endsection

@section('content')

<div class="container">
  <div class="text-center mb-5" data-aos="fade-up">
    <h1 class="fw-bold">Detail Genre</h1>
    <div class="mx-auto" style="width: 100px; height: 4px; background-color: #0d6efd;"></div>
  </div>

  <div class="mb-4">
    <h2 class="text-primary">{{$genre->name}}</h2>
    <p class="text-muted">{{$genre->description}}</p>
  </div>

  <hr class="mb-5">

  <div class="row g-4">
    @forelse ($genre->Books as $item)
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm h-100">
          <img src="{{asset('image/'.$item->image)}}" class="card-img-top object-fit-cover" style="height: 250px; object-fit: cover;" alt="{{$item->title}}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">{{$item->title}}</h5>
            <p class="card-text text-muted">{{Str::limit($item->summary, 100)}}</p>
            <div class="mt-auto">
              <a href="/books/{{$item->id}}" class="btn btn-info w-100">Read More</a>
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12 text-center">
        <h2 class="text-muted">Tidak Ada Data</h2>
      </div>
    @endforelse
  </div>

  <div class="mt-5">
    <a href="/genre" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>
  </div>
</div>

@endsection
