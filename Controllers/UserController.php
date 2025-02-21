<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('siswa.index'); // Mengarahkan ke halaman index.blade.php
    }

    public function registrasi()
    {
        return view('siswa.registrasi'); // Mengarahkan ke halaman index.blade.php
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'nis' => 'required|unique:siswa,nis',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'username' => 'required|unique:siswa,username',
            'password' => 'required|min:8',
        ]);

        // Membuat pengguna baru
        Siswa::create([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        return redirect('/')->with('success', 'Registrasi berhasil!');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $siswa = Siswa::where('username', $request->username)->first();
        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password])) {
            session(['siswa' => $siswa]);
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        }
    
        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); 
        $request->session()->forget('siswa');
        $request->session()->invalidate(); 
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil!'); // Redirect ke halaman login
    }
}
