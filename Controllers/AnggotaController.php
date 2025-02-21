<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller {
    public function anggota()
    {
        $siswa = Anggota::all();
        return view('admin.data-anggota', compact('siswa'));
    }

    public function editAnggota($id)
    {
        $siswa = Anggota::findOrFail($id);
        return view('admin.ubahDataAnggota', compact('siswa'));
    }
    public function updateAnggota(Request $request, $id_anggota)
    {
        $siswa = Anggota::findOrFail($id_anggota);
    
        $request->validate([
            'nis' => 'required|unique:siswa,nis,' . $id_anggota . ',id_anggota',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'username' => 'required|unique:siswa,username,' . $id_anggota . ',id_anggota',
            'password' => 'nullable|min:8',
        ]);

    try {
        $data = $request->except(['password']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

            $siswa->update($data);
            return redirect()->route('admin.anggota')->with('success', 'Data siswa berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('admin.anggota')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
    }

    // Proses delete data buku
    public function destroyAnggota($id_anggota)
    {
        try {
            Anggota::findOrFail($id_anggota)->delete();
            return redirect()->route('admin.anggota')->with('success', 'Data siswa berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('admin.anggota')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

}