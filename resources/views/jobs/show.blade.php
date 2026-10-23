@extends('layouts.app')

@section('title', $job->title)

@section('content')
<a href="{{ route('jobs.index') }}" class="text-decoration-none text-teal">← Kembali ke daftar lowongan</a>
<div class="row g-4 mt-2">
    <div class="col-lg-8">
        <article class="card detail-panel border-0 shadow-sm"><div class="card-body p-4 p-lg-5">
            <div class="d-flex gap-3 align-items-center mb-4"><img class="company-mark object-fit-cover" style="width:64px;height:64px" src="{{ asset('assets/images/' . $job->image) }}" alt="Foto terkait lowongan {{ $job->title }}"><div><h1 class="h2 fw-bold mb-1">{{ $job->title }}</h1><div class="text-secondary">{{ $job->company }}</div></div></div>
            <div class="d-flex flex-wrap gap-2 mb-4"><span class="badge rounded-pill bg-light text-secondary border px-3 py-2">⌖ {{ $job->location }}</span><span class="badge rounded-pill bg-light text-secondary border px-3 py-2">{{ $job->type }}</span><span class="badge rounded-pill bg-light text-secondary border px-3 py-2">{{ $job->salary }}</span></div>
            <h2 class="h5 fw-bold">Deskripsi Pekerjaan</h2><p class="text-secondary">{{ $job->description }}</p>
            <h2 class="h5 fw-bold mt-4">Persyaratan</h2><p class="text-secondary mb-0">{{ $job->requirements }}</p>
        </div></article>
    </div>
    <aside class="col-lg-4"><div class="card detail-panel border-0 shadow-sm"><div class="card-body p-4"><h2 class="h5 fw-bold mb-3">Informasi Lowongan</h2><dl class="mb-0"><dt class="small text-secondary">Perusahaan</dt><dd>{{ $job->company }}</dd><dt class="small text-secondary">Lokasi</dt><dd>{{ $job->location }}</dd><dt class="small text-secondary">Jenis pekerjaan</dt><dd>{{ $job->type }}</dd><dt class="small text-secondary">Tanggal diposting</dt><dd>{{ $job->posted_date->translatedFormat('d F Y') }}</dd><dt class="small text-secondary">Kisaran gaji</dt><dd class="text-teal fw-semibold">{{ $job->salary }}</dd></dl><a href="mailto:hr@example.com?subject={{ urlencode('Lamaran ' . $job->title) }}" class="btn btn-success w-100 rounded-3 mt-2">Lamar Sekarang</a><p class="small text-secondary mt-2 mb-0">Hubungi perusahaan untuk informasi proses lamaran.</p></div></div></aside>
</div>
@endsection



