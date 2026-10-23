@extends('layouts.app')

@section('title', 'Masuk')

@section('content')
<section class="auth-page py-5">
    <div class="auth-card card border-0 shadow-sm mx-auto">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                <h1 class="h2 fw-bold mb-2">Selamat datang kembali</h1>
                <p class="text-secondary mb-0">Masuk untuk menemukan dan menyimpan lowongan kerja.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold" for="email">Alamat email</label>
                    <input class="form-control form-control-lg" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="nama@email.com" autocomplete="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold" for="password">Kata sandi</label>
                    <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Masukkan kata sandi" autocomplete="current-password" required>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" id="remember" name="remember" type="checkbox" value="1">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
                <button class="btn btn-brand btn-lg w-100" type="submit">Masuk</button>
            </form>
        </div>
    </div>
</section>
@endsection
