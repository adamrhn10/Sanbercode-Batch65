@extends('layouts.master')

@section('title')
Home
@endsection

@section('content')

<div class="container">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">SanberBook</h1>
        <p class="lead">Tempat Nongkrongnya Pecinta Buku</p>
        <p>Belajar, berbagi, dan ngobrol soal buku biar hidup makin seru!</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Benefit Join di SanberBook</h3>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">Dapat motivasi baca dari teman-teman sesama booklover</li>
                        <li class="list-group-item">Sharing review dan rekomendasi buku dari yang udah berpengalman</li>
                        <li class="list-group-item">Komunitas seru yang dibangun oleh para pembaca kece</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Cara Bergabung ke SanberBook</h3>
                    <ol class="list-group list-group-numbered mt-3">
                        <li class="list-group-item">Mengunjungi Website ini</li>
                        <li class="list-group-item">
                            Mendaftar di <a href="/register" class="text-decoration-none">Form Sign Up</a>
                        </li>
                        <li class="list-group-item">Selesai!</li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
