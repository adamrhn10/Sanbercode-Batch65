@extends('layouts.master')

@section('title')
  Tampil Books
@endsection

@section('content')

<div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h1 class="fw-bold">List Buku</h1>
      <div class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd;"></div>
    </div>
    
  @auth
    @if (Auth()->user()->role === 'admin')
      <div class="d-flex justify-content-end mb-3">
        <a href="/books/create" class="btn btn-primary">
          <i class="bi bi-plus-circle me-1"></i> Tambah Buku
        </a>
      </div>
    @endif
  @endauth

  <div class="row g-4">
    @forelse ($books as $item)
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          
          <img src="{{ asset('image/'.$item->image) }}" 
               class="card-img-top object-fit-cover" 
               style="height: 300px; object-fit: cover;" 
               alt="">

          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>

            <span class="badge bg-secondary mb-2">
              {{ $item->genre->name }}
            </span>

            <p class="card-text">
              {{ Str::limit($item->summary, 100) }}
            </p>

            <div class="d-grid">
              <a href="/books/{{ $item->id }}" class="btn btn-info">
                Read More
              </a>
            </div>

            @auth    
              @if (Auth()->user()->role === 'admin')
                <div class="row mt-3">
                  <div class="col">
                    <div class="d-grid gap-2">
                      <a href="/books/{{ $item->id }}/edit" class="btn btn-warning">
                        Edit
                      </a>
                    </div>
                  </div>

                  <div class="col">
                    <form action="/books/{{ $item->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </div>
                    </form>
                  </div>
                </div>
              @endif
            @endauth

          </div> <!-- end card-body -->

        </div> <!-- end card -->
      </div> <!-- end col -->
    @empty
      <h5 class="text-center">Tidak Ada Data</h5>
    @endforelse
  </div> <!-- end row -->

@endsection
