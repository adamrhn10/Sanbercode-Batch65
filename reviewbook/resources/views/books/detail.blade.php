@extends('layouts.master')

@section('title')
Detail Books
@endsection

@section('content')
<img src="{{asset('image/'.$books->image)}}" width="100%" height="200px" alt="">
<h1 class="my-3">{{$books->title}}</h1>
<p class="my-3">{{$books->summary}}</p>
<a href="/books" class="btn btn-info">Kembali</a>
@endsection