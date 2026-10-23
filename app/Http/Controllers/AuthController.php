<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function updateProfile(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,'. $request->user()->id],
            'phone' => ['nullable', 'string', 'max:30'],
            'birth_date' => ['nullable', 'date', 'before_or_equal:today'],
            'gender' => ['nullable', 'in:perempuan,laki-laki'],
            'address' => ['nullable', 'string', 'max:1000'],
            'education' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:1000'],
        ], [
            'email.unique' => 'Alamat email sudah digunakan akun lain.',
            'birth_date.before_or_equal' => 'Tanggal lahir tidak boleh melewati hari ini.',
        ]);

        $request->session()->put('profile', $data);

        return redirect()->route('profile')->with('status', 'Data diri berhasil diperbarui.');
    }

    public function showLogin(): View
    {
        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors(['email' => 'Email atau kata sandi tidak sesuai.'])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('jobs.index'))->with('status', 'Berhasil masuk. Selamat datang kembali!');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('jobs.index')->with('status', 'Kamu berhasil keluar.');
    }
}
