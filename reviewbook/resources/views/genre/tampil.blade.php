@extends('layouts.master')

@section('title')
Genre
@endsection

@section('content')
<div class="container">
  <div class="text-center mb-4" data-aos="fade-up">
    <h1 class="fw-bold">List Genre</h1>
    <div class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd;"></div>
  </div>

<div class="container py-4">
  @auth
    @if (Auth()->user()->role === 'admin')
      <div class="d-flex justify-content-end mb-3">
        <a href="/genre/create" class="btn btn-primary">
          <i class="bi bi-plus-circle me-1"></i> Tambah Genre
        </a>
      </div>
    @endif
  @endauth

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table align-middle">
          <thead class="table-dark">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col">Name</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($genres as $item)
              <tr>
                <th scope="row" class="text-center">{{$loop->iteration}}</th>
                <td>{{$item->name}}</td>
                <td class="text-center">
                  <div class="d-flex justify-content-center gap-2">
                    <a href="/genre/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>

                    @auth  
                      @if (Auth()->user()->role === 'admin')
                        <a href="/genre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/genre/{{$item->id}}" method="POST" onsubmit="return confirm('Are you sure?');">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      @endif
                    @endauth
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="text-center">No Data Available</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection
