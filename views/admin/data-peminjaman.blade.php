<x-masterAdmin>
    <div class="container vh-100">
        <div class="h-100 d-flex justify-content-center flex-column align-items-center">
            <div class="container d-flex justify-content-between mb-2">
                <h2>Data Peminjaman Buku</h2>
            </div>
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($transaksi as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->kode_buku }}</td>
                        <td>{{ $item->buku->judul_buku ?? '-' }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->siswa->nama_siswa ?? '-' }}</td>
                        <td>{{ $item->siswa->kelas ?? '-' }}</td>
                        <td>{{ $item->siswa->jurusan ?? '-' }}</td>
                        <td>{{ $item->tanggal_pinjam }}</td>
                        <td>{{ $item->tanggal_pengembalian ?? 'Belum dikembalikan' }}</td>
                        <td><a href="{{ route('admin.editTransaksi', $item->id_transaksi) }}" class="btn btn-warning btn-sm">Update</a>
                            <form action="{{ route('admin.destroyTransaksi', $item->id_transaksi) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-masterAdmin>