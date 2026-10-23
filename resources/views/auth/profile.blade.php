@extends('layouts.app')

@section('title', 'Profile Mahasiswa')

@section('content')
<section class="py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
                <div class="text-center p-4 border-bottom">
                    <img src="{{ asset('assets/images/haris.jpeg') }}" alt="Foto profil mahasiswa" class="profile-avatar mb-3">
                    <h1 class="h4 mb-0">Profile Mahasiswa</h1>
                </div>
                <div class="card-body p-4">
                    <dl class="row mb-0 profile-details">
                        <dt class="col-4">Nama</dt><dd class="col-8">Haris Nurkholik</dd>
                        <dt class="col-4">NIM</dt><dd class="col-8">251011700675</dd>
                        <dt class="col-4">Jurusan</dt><dd class="col-8">Sistem Informasi</dd>
                        <dt class="col-4">Universitas</dt><dd class="col-8">Universitas Pamulang</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.profile-avatar{width:112px;height:112px;border-radius:50%;object-fit:cover;border:3px solid #e8edf3}.profile-details dt,.profile-details dd{padding:.65rem 0;margin:0;border-bottom:1px solid #eef1f4}.profile-details dt:last-of-type,.profile-details dd:last-of-type{border-bottom:0}.profile-details dt{font-weight:700;color:#17233e}.profile-details dd{color:#34415a}
</style>
@endpush
