<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Temukan lowongan kerja terbaru dari perusahaan terpercaya.">
    <title>@yield('title', 'KerjaKita') | KerjaKita</title>
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        :root { --ink:#13264b; --teal:#078e98; --teal-dark:#067782; --muted:#657187; --line:#e8edf3; }
        body { background:#fff; color:var(--ink); font-family:Inter,system-ui,-apple-system,"Segoe UI",sans-serif; }
        .navbar { min-height:76px; box-shadow:0 2px 12px rgba(19,38,75,.05); }
        .navbar-brand { font-weight:850; letter-spacing:-.055em; color:var(--ink)!important; font-size:1.8rem; }
        .navbar-brand .brand-accent { color:var(--teal); }
        .navbar .nav-link { color:#17233e; font-weight:550; padding:.5rem .9rem!important; }
        .navbar .nav-link.active { color:var(--ink); position:relative; }
        .navbar .nav-link.active:after { content:""; position:absolute; left:.9rem; right:.9rem; bottom:0; height:2px; background:var(--teal); }
        .btn-brand { background:var(--teal); border-color:var(--teal); color:#fff; font-weight:650; }
        .btn-brand:hover { background:var(--teal-dark); border-color:var(--teal-dark); color:#fff; }
        .hero { min-height:475px; position:relative; overflow:hidden; background:#fff; }
        .hero-art { position:absolute; z-index:0; right:-1.5%; top:0; width:100%; height:100%; object-fit:cover; object-position:right center; pointer-events:none; }
        .hero::after { content:"";position:absolute;z-index:0;inset:0;pointer-events:none;background:linear-gradient(90deg,#fff 0%,rgba(255,255,255,.98) 28%,rgba(255,255,255,.88) 43%,rgba(255,255,255,.58) 57%,rgba(255,255,255,.12) 74%,transparent 88%); }
        .hero-copy { position:relative; z-index:1; padding-top:42px; padding-bottom:20px; }
        .hero-title { max-width:690px; font-size:clamp(2.5rem,4.2vw,4.25rem); line-height:1.05; letter-spacing:-.055em; color:var(--ink); }
        .hero-title .accent { color:#007982; }
        .hero-lead { max-width:660px; color:#46536a; font-size:1.2rem; }
        .search-panel { max-width:790px; border:1px solid #e6eaf0; border-radius:16px; box-shadow:0 8px 24px rgba(19,38,75,.08); }
        .search-input { min-height:54px; border:0!important; box-shadow:none!important; }
        .search-divider { border-right:1px solid #e8edf3; }
        .feature-icon { width:54px;height:54px;border-radius:50%;display:grid;place-items:center;flex:0 0 auto;background:#e5f5f6;color:#007982;box-shadow:0 2px 8px rgba(19,38,75,.08); }
        .feature-icon svg { width:25px;height:25px; }
        .feature-title { font-weight:700; color:#102348; }
        .feature-copy { color:#4e5b72; font-size:.88rem; }
        .section-title { letter-spacing:-.035em; color:var(--ink); }
        .job-card { border:1px solid #e8edf3!important; border-radius:14px; box-shadow:0 5px 18px rgba(19,38,75,.06); transition:transform .18s ease,box-shadow .18s ease; }
        .job-card:hover { transform:translateY(-3px); box-shadow:0 12px 28px rgba(19,38,75,.1); }
        .company-mark { width:66px;height:66px;display:block;object-fit:cover;border-radius:15px; }
        .job-cover { height:180px;position:relative;display:grid;place-items:center;background:linear-gradient(135deg,#e8f3fb,#edf8f6);border-bottom:1px solid var(--line); }
        .job-cover img { width:132px;height:132px;object-fit:contain; }
        .job-status { position:absolute;left:14px;bottom:12px;background:#23866b;color:#fff;font-weight:600; }
        .job-description { min-height:42px;color:#556176;font-size:.92rem;line-height:1.45; }
        .job-tech { min-height:44px;line-height:1.7; }
        .pagination { margin-bottom:0; }
        .pagination .page-link { color:var(--teal-dark);border-color:#e3e9ef; }
        .pagination .active > .page-link { background:var(--teal);border-color:var(--teal);color:#fff; }
        .auth-page { min-height:65vh;display:flex;align-items:center;justify-content:center; }
        .auth-card { width:100%;max-width:520px;border-radius:18px; }
        .auth-card .form-control { border-color:#dce4ec;border-radius:10px; }
        .auth-card .form-control:focus { border-color:var(--teal);box-shadow:0 0 0 .2rem rgba(7,142,152,.14); }
        .job-meta { color:#58657c; font-size:.92rem; }
        .text-brand { color:var(--teal)!important; }
        .badge-type { background:#e7f7f4;color:#16937e;font-weight:600; }
        .btn-outline-brand { border:1px solid var(--teal);color:var(--teal);font-weight:650; }
        .btn-outline-brand:hover { background:var(--teal);color:#fff; }
        .bookmark { border:0;background:transparent;color:#37455f;padding:4px; }
        .bookmark svg { width:20px;height:20px; }
        @media (max-width: 991.98px) {
            .hero { min-height:unset; }
            .hero-art { right:-15%; width:66%; opacity:.22; }
            .hero::after { background:linear-gradient(90deg,#fff 0%,rgba(255,255,255,.95) 48%,rgba(255,255,255,.62) 100%); }
            .hero-copy { padding-top:30px; }
        }
        @media (max-width: 575.98px) {
            .hero-art { width:100%;right:-35%;opacity:.14; }
            .hero-copy { padding-top:18px; }
            .search-divider { border-right:0;border-bottom:1px solid #e8edf3; }
            .hero-features { gap:14px!important; }
        }
    </style>
    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('jobs.index') }}">Kerja<span class="brand-accent">Kita</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Buka navigasi"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="mainNav">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active" href="{{ route('jobs.index') }}">Beranda</a>
                <a class="nav-link" href="{{ route('jobs.index') }}#lowongan">Cari Lowongan</a>
                <a class="nav-link" href="{{ route('companies.index') }}">Cari Perusahaan</a>
            </div>
            <div class="navbar-nav align-items-lg-center gap-lg-2">
                @guest
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                @else
                    <a class="nav-link {{ request()->routeIs('profile*') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">@csrf<button class="btn btn-outline-secondary rounded-3 px-3" type="submit">Keluar</button></form>
                @endguest
            </div>
        </div>
    </div>
</nav>
<main class="container">
    @if (session('status'))
        <div class="alert alert-success mt-3 mb-0" role="status">{{ session('status') }}</div>
    @endif
    @yield('content')
</main>
<footer class="border-top bg-white py-4 mt-4"><div class="container d-flex flex-column flex-md-row justify-content-between gap-2 text-secondary small"><span><strong class="text-brand">KerjaKita</strong> — Portal Lowongan Kerja</span><span>Temukan peluang, mulai langkah kariermu.</span></div></footer>
<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@stack('scripts')
</body>
</html>
