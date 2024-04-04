<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    // Menampilkan formulir login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan autentikasi
        if (Auth::attempt($credential)) {
            // Jika berhasil, redirect ke halaman beranda
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // Logout pengguna
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Redirect ke halaman login setelah logout
        return redirect('/login');
    }
}
