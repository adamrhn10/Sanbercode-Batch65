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

<div class="card shadow-lg border-0" data-aos="fade-up">
    <div class="card-body text-center">
      @auth
        <h1 class="fw-bold text-primary mb-3">
          Selamat Datang, {{ Auth()->user()->name }}!
        </h1>

        @if (Auth()->user()->profile)
          <h5 class="text-muted mb-4">
            ({{ Auth()->user()->profile->age }} Tahun)
          </h5>
        @endif
      @endauth

  <h2>
    Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!
  </h2>
@endsection