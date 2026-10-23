@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <img class="hero-art" src="{{ asset('assets/images/city-career-hero.png') }}" alt="Kawasan perkantoran modern dan taman kota">
    <div class="hero-copy">
        <h1 class="hero-title fw-bold mb-3">Temukan pekerjaan<br>yang cocok <span class="accent">untukmu</span></h1>
        <p class="hero-lead mb-4">Jelajahi peluang karier dari berbagai perusahaan terpercaya.</p>
        <form id="lowongan" class="search-panel bg-white p-2 mb-4" method="GET" action="{{ route('jobs.index') }}#lowongan">
            <div class="px-3 pt-2 fw-bold">Cari Lowongan dan Perusahaan</div>
            <div class="row g-1 align-items-center">
                <div class="col-md search-divider"><label class="visually-hidden" for="q">Posisi atau kata kunci</label><div class="input-group"><span class="input-group-text bg-white border-0 ps-3 text-secondary"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></svg></span><input id="q" class="form-control search-input" name="q" value="{{ request('q') }}" placeholder="Posisi atau kata kunci"></div></div>
                <div class="col-md search-divider"><label class="visually-hidden" for="company">Nama perusahaan</label><div class="input-group"><span class="input-group-text bg-white border-0 ps-3 text-secondary" aria-hidden="true">▦</span><input id="company" class="form-control search-input" name="company" value="{{ request('company') }}" placeholder="Nama perusahaan"></div></div>
                <div class="col-md search-divider"><label class="visually-hidden" for="location">Lokasi</label><div class="input-group"><span class="input-group-text bg-white border-0 ps-3 text-secondary"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg></span><input id="location" class="form-control search-input" name="location" value="{{ request('location') }}" placeholder="Lokasi"></div></div>
                <div class="col-md-auto d-grid"><button class="btn btn-brand rounded-3 px-4 py-3" type="submit">Cari</button></div>
            </div>
        </form>
        <div class="hero-features d-flex flex-wrap gap-4 gap-xl-5">
            <div class="d-flex align-items-center gap-3"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V5h10v16M15 10h4v11M8 9h4M8 13h4M8 17h4M17 14h1M17 17h1"/></svg></span><span><span class="feature-title d-block">Ribuan lowongan</span><span class="feature-copy">dari perusahaan terpercaya</span></span></div>
            <div class="d-flex align-items-center gap-3"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg></span><span><span class="feature-title d-block">Proses aman</span><span class="feature-copy">dan terpercaya</span></span></div>
            <div class="d-flex align-items-center gap-3"><span class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM20 8v6M23 11h-6"/></svg></span><span><span class="feature-title d-block">Peluang karier lebih luas</span><span class="feature-copy">untuk masa depanmu</span></span></div>
        </div>
    </div>
</section>

<section class="pb-4">
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-end gap-2 mb-3">
        <div><h2 class="section-title h2 fw-bold mb-1">Lowongan Terbaru</h2><p class="text-secondary mb-0">Temukan kesempatan karier terbaru dari perusahaan terbaik di Indonesia.</p></div>
        <a class="text-brand fw-semibold text-decoration-none" href="#lowongan">Lihat Semua Lowongan <span class="ms-1">→</span></a>
    </div>
    @if($jobs->isEmpty())
        <div class="alert alert-info rounded-4">Belum ada lowongan yang cocok. Coba kata kunci atau lokasi lain.</div>
    @else
        <div class="row g-3">
            @foreach($jobs as $job)
                <div class="col-md-6 col-xl-4">
                    <article class="card job-card h-100 overflow-hidden">
                        <div class="job-cover">
                            <img src="{{ asset('assets/images/' . $job->image) }}" alt="Ilustrasi {{ $job->title }}">
                            <span class="badge job-status">Tersedia</span>
                        </div>
                        <div class="card-body p-3 d-flex flex-column">
                            <h3 class="h5 fw-bold mb-1">{{ $job->title }}</h3>
                            <p class="text-secondary mb-2">{{ $job->company }}</p>
                            <p class="job-description mb-3">{{ \Illuminate\Support\Str::limit($job->description, 90) }}</p>
                            <div class="job-tech text-secondary small mt-auto mb-3">
                                <span>{{ $job->type }}</span><span class="mx-1">·</span><span>{{ $job->location }}</span><br>
                                <span>Gaji: {{ $job->salary }}</span>
                            </div>
                            <button
                                class="btn btn-primary w-100 rounded-2"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#jobDetailModal"
                                data-job-title="{{ $job->title }}"
                                data-job-company="{{ $job->company }}"
                                data-job-location="{{ $job->location }}"
                                data-job-type="{{ $job->type }}"
                                data-job-salary="{{ $job->salary }}"
                                data-job-description="{{ $job->description }}"
                                data-job-requirements="{{ $job->requirements }}"
                                data-job-posted="{{ $job->posted_date->translatedFormat('d F Y') }}"
                                data-job-url="{{ route('jobs.show', $job) }}"
                            >Lihat Detail</button>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-2 mt-4">
            <small class="text-secondary">Menampilkan {{ $jobs->firstItem() }}–{{ $jobs->lastItem() }} dari {{ $jobs->total() }} lowongan</small>
            {{ $jobs->onEachSide(1)->links('pagination::bootstrap-5') }}
        </div>
    @endif
</section>

<div class="modal fade" id="jobDetailModal" tabindex="-1" aria-labelledby="jobDetailModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header">
                <div>
                    <h2 class="modal-title h4 fw-bold" id="jobDetailModalTitle"></h2>
                    <p class="text-secondary mb-0" id="jobDetailModalCompany"></p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body p-4">
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="badge rounded-pill bg-light text-secondary border px-3 py-2" id="jobDetailModalLocation"></span>
                    <span class="badge rounded-pill bg-light text-secondary border px-3 py-2" id="jobDetailModalType"></span>
                    <span class="badge rounded-pill bg-light text-secondary border px-3 py-2" id="jobDetailModalSalary"></span>
                </div>
                <h3 class="h6 fw-bold">Deskripsi Pekerjaan</h3>
                <p class="text-secondary" id="jobDetailModalDescription"></p>
                <h3 class="h6 fw-bold mt-4">Persyaratan</h3>
                <p class="text-secondary mb-4" id="jobDetailModalRequirements"></p>
                <p class="small text-secondary mb-0">Tanggal diposting: <span id="jobDetailModalPosted"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <a class="btn btn-brand" id="jobDetailModalLink" href="#">Buka Halaman Detail</a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.getElementById('jobDetailModal').addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const job = button.dataset;

        document.getElementById('jobDetailModalTitle').textContent = job.jobTitle;
        document.getElementById('jobDetailModalCompany').textContent = job.jobCompany;
        document.getElementById('jobDetailModalLocation').textContent = job.jobLocation;
        document.getElementById('jobDetailModalType').textContent = job.jobType;
        document.getElementById('jobDetailModalSalary').textContent = job.jobSalary;
        document.getElementById('jobDetailModalDescription').textContent = job.jobDescription;
        document.getElementById('jobDetailModalRequirements').textContent = job.jobRequirements;
        document.getElementById('jobDetailModalPosted').textContent = job.jobPosted;
        document.getElementById('jobDetailModalLink').href = job.jobUrl;
    });
</script>
@endpush
@endsection

