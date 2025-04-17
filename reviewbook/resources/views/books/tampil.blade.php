@extends('layouts.master')

@section('title')
Tampil Books
@endsection

@section('content')
<a href="/books/create" class="btn btn-primary mb-2">Tambah</a>

<div class="row">
    @forelse ($books as $item)
            <div class="col-4">
                <div class="card">
                    <img src="{{asset('image/'.$item->image)}}" class="card-img-top" height="300px" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->title}}</h5>
                      <p class="card-text">{{Str::limit($item->summary, 100)}}</p>
                      <div class="d-grid">
                        <a href="/books/{{$item->id}}" class="btn btn-info">Read More</a>
                      </div>
                      <div class="row">
                        <div class="col">
                            <div class="d-grid my-1">
                                <a href="/books/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                        <div class="col">
                            <form action="/books/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <div class="d-grid my-1">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
    @empty
        <h5>Tidak Ada Data</h5>
    @endforelse

</div>
@endsection
