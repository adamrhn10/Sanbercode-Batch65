@extends('layouts.master')

@section('title')
Register
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="card shadow-sm p-4" style="width: 100%; max-width: 450px;">
    <h2 class="text-center mb-4">Register</h2>

    {{-- Error Message --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="/register" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan Username" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-person-plus me-1"></i> Submit
        </button>
      </div>
    </form>

    <div class="text-center mt-3">
      <small>Sudah punya akun? <a href="/login" class="text-primary text-decoration-none">Login di sini</a></small>
    </div>
  </div>
</div>
@endsection
