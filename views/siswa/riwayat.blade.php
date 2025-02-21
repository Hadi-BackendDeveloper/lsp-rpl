<x-master>
    <div class="mt-5">
        <div>
            <h2>Riwayat Peminjaman Buku</h2>
            <table class="table">
                <thead class="table-dark">
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
                        <td>
                            @if($item->tanggal_pengembalian)
                                <button type="button" class="btn btn-success btn-sm" disabled>Sudah Dikembalikan</button>
                            @else
                                <form action="{{ route('user.updateTransaksi', $item->id_transaksi) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="tanggal_pengembalian" name="tanggal_pengembalian" value="">
                                    <button type="submit" class="btn btn-danger btn-sm">Kembalikan Buku</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-master>