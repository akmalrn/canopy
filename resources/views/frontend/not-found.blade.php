@extends('frontend.layouts')

@section('content')
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="text-center">
        <h1 class="display-4">404 - Halaman Tidak Ditemukan</h1>
        <p>Maaf, halaman yang kamu cari tidak dapat ditemukan.</p>
        <a href="{{ Route('index') }}" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
</div>
@endsection
