<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('jobs.index'));
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/perusahaan', [CompanyController::class, 'index'])->name('companies.index');

Route::get('/profile', function () {
    return view('auth.profile', ['user' => (object) session('profile', [])]);
})->name('profile');


Route::middleware('guest')->group(function () {
    Route::get('/masuk', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/masuk', [AuthController::class, 'login'])->name('login.store');
});

Route::post('/keluar', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

