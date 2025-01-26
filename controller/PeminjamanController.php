<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Siswa;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function koleksi()
    {
        $buku = Buku::all();
        return view('user.koleksi', compact('buku'));
    }
    public function pinjamBuku(Request $request, $kodeBuku)
    {
        $siswa = Auth::user(); 

        $transaksiAktif = Transaksi::where('nis', $siswa->nis)
            ->whereNull('tanggal_pengembalian') 
            ->first();

        if ($transaksiAktif) {
        return back()->with('error', 'Anda sudah meminjam buku. Harap kembalikan buku sebelum meminjam lagi.');
        }
        
        $siswa = session('siswa');
        if (!$siswa) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $buku = Buku::where('kode_buku', $kodeBuku)->first();
        if (!$buku) {
            return back()->with('error', 'Buku tidak ditemukan.');
        }

        Transaksi::create([
            'kode_buku' => $buku->kode_buku,
            'nis' => $siswa['nis'],
            'tanggal_pinjam' => now(),
            'tanggal_pengembalian' => null, // Dibiarkan kosong sampai buku dikembalikan
        ]);

        return back()->with('success', 'Buku berhasil dipinjam.');
    }

    public function riwayat()
    {
        $transaksi = Transaksi::where('nis', Auth::user()->nis)->get();
        $transaksi = Transaksi::with('siswa', 'buku')->get();
        return view('user.riwayat', compact('transaksi'));
    }

    public function updateTransaksi(Request $request, $id_transaksi)
    {

    $request->validate([
        'tanggal_pengembalian' => 'required|date',
    ]);

    $transaksi = Transaksi::findOrFail($id_transaksi);

    $transaksi->update([
        'tanggal_pengembalian' => $request->tanggal_pengembalian,
    ]);

    return redirect()->back()->with('success', 'Pengembalian buku berhasil.');
}
}
