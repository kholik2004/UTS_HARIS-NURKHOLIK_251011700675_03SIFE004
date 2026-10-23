@extends('layouts.app')

@section('title', 'Cari Perusahaan')

@section('content')
<section class="py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
            <span class="badge rounded-pill text-bg-light text-brand border px-3 py-2 mb-3">Kenali tempat kerjamu</span>
            <h1 class="section-title display-6 fw-bold mb-2">Cari Perusahaan</h1>
            <p class="text-secondary">Temukan perusahaan dan lihat peluang kerja yang tersedia.</p>
        </div>
    </div>

    <form class="card search-panel bg-white p-3 mx-auto mb-4" method="GET" action="{{ route('companies.index') }}" style="max-width: 760px">
        <div class="row g-2 align-items-center">
            <div class="col-md">
                <label class="visually-hidden" for="company-query">Nama perusahaan</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-0 text-secondary" aria-hidden="true">⌕</span>
                    <input id="company-query" class="form-control search-input" name="q" value="{{ request('q') }}" placeholder="Masukkan nama perusahaan">
                </div>
            </div>
            <div class="col-md-auto d-grid"><button class="btn btn-brand rounded-3 px-4 py-3" type="submit">Cari Perusahaan</button></div>
        </div>
    </form>

    @if($companies->isEmpty())
        <div class="alert alert-info rounded-4 mx-auto" style="max-width: 760px">Perusahaan tidak ditemukan. Coba kata kunci lain.</div>
    @else
        <div class="row g-3">
            @foreach($companies as $company)
                <div class="col-md-6 col-xl-4">
                    <article class="card job-card h-100">
                        <div class="card-body p-4 d-flex flex-column">
                            <span class="feature-icon mb-3" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V5h10v16M15 10h4v11M8 9h4M8 13h4M8 17h4M17 14h1M17 17h1"/></svg></span>
                            <h2 class="h5 fw-bold mb-2">{{ $company->company }}</h2>
                            <p class="text-secondary mb-4">{{ $company->job_count }} lowongan tersedia</p>
                            <a class="btn btn-outline-brand rounded-2 mt-auto" href="{{ route('jobs.index', ['company' => $company->company]) }}">Lihat Lowongan</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-2 mt-4">
            <small class="text-secondary">Menampilkan {{ $companies->firstItem() }}–{{ $companies->lastItem() }} dari {{ $companies->total() }} perusahaan</small>
            {{ $companies->onEachSide(1)->links('pagination::bootstrap-5') }}
        </div>
    @endif
</section>
@endsection
