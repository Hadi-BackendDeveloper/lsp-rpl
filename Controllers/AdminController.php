<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('admin.index');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($request->only('username', 'password'))) {
            // Redirect ke dashboard setelah login berhasil
            return redirect()->route('admin.home')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    public function tambahDataBuku()
    {
        return view('admin.tambahDataBuku');
    }

    // Proses tambah data buku
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|integer',
        ]);

        try {
            Buku::create($request->all());
            return redirect()->back()->with('success', 'Data buku berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function home()
    {
        return view('admin.home');
    }
    public function data_buku()
    {
        $buku = Buku::all();
        return view('admin.data-buku', compact('buku'));
    }

    public function editBuku($id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin.ubahDataBuku', compact('buku'));
    }
    public function updateBuku(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $request->validate([
            'kode_buku' => 'required:buku,kode_buku,' . $buku->kode_buku,
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|integer',
        ]);

        try {
            $buku->update($request->all());
            return redirect()->route('admin.home')->with('success', 'Data buku berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('admin.home')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // Proses delete data buku
    public function destroyBuku($id)
    {
        try {
            Buku::findOrFail($id)->delete();
            return redirect()->route('admin.home')->with('success', 'Data buku berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('admin.home')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logout berhasil!');
    }
}