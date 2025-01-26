<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Siswa;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function daftarTransaksi()
    {
        $transaksi = Transaksi::with('siswa', 'buku')->get();
        return view('admin.transaksi', compact('transaksi'));
    }

    public function editTransaksi($id_transaksi)
    {
        $transaksi = Transaksi::with(['buku', 'siswa'])->find($id_transaksi);
    
        if (!$transaksi) {
            return redirect()->back()->with('error', 'Data transaksi tidak ditemukan!');
        }
    
        return view('admin.ubahDataTransaksi', compact('transaksi'));
    }

    public function updateTransaksi(Request $request, $id_transaksi)
    {
        $request->validate([
            'tanggal_pengembalian' => 'required|date',
        ]);

        DB::table('transaksi')
            ->where('id_transaksi', $id_transaksi)
            ->update([
                'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ]);

        return redirect()->route('transaksi', ['id' => $id_transaksi])
            ->with('success', 'Tanggal pengembalian berhasil diperbarui.');
    }
    public function destroyTransaksi($id)
    {
        $transaksi = Transaksi::findOrFail($id);
    
        $transaksi->delete();
    
        return redirect()->back()->with('success', 'Data peminjaman berhasil dihapus.');
    }
}