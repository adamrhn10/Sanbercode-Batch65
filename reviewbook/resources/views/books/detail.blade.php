  @extends('layouts.master')

  @section('title')
  Detail Books
  @endsection

  @section('content')

  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h1 class="fw-bold">Detail Buku</h1>
      <div class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd;"></div>
    </div>

    <div class="card overflow-hidden mb-4" style="height: 300px;">
      <img src="{{ asset('image/'.$books->image) }}" 
           alt="{{ $books->title }}" 
           class="w-100 h-100" 
           style="object-fit: cover; object-position: center;">
    </div>
    
    <h1 class="my-3">{{ $books->title }}</h1>
    <p class="my-3">{{ $books->summary }}</p>
    <p class="mt-4"><strong>Ketersediaan Stok:</strong> {{ $books->stok }}</p>
    <a href="/books" class="btn btn-secondary">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>    

  <hr>
  
  <div class="mb-5" data-aos="fade-up">
    <h2 class="fw-bold mb-4">List Komentar</h2>
    @forelse ($books->comments as $item)
      <div class="card shadow-sm mb-3">
        <div class="card-header bg-dark text-white">
          <strong>{{ $item->owner->name }}</strong>
        </div>
        <div class="card-body">
          <p class="card-text">{{ $item->content }}</p>
        </div>
      </div>
    @empty
      <div class="alert alert-warning text-center" role="alert">
        Tidak ada komentar untuk buku ini.
      </div>
    @endforelse
  </div>

  <hr>

  @auth
  <div class="card shadow-sm" data-aos="fade-up">
    <div class="card-body">
      <h3 class="card-title mb-4">Tulis Komentar</h3>

      {{-- Error Validation --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif
      
      @csrf
      <form action="/comments/{{ $books->id }}" method="POST">
        @csrf
        <div class="mb-3">
          <textarea name="content" class="form-control" placeholder="Tulis komentar Anda di sini..." rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-send"></i> Kirim Komentar
        </button>
      </form>
    </div>
  </div>

  @endauth
  @endsection