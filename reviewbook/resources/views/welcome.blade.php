@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h1>SELAMAT DATANG! {{$firstname}}</h1>
  <h2>
    Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!
  </h2>
@endsection