<x-masterAdmin>
    <div class="container vh-100 position-relative">
        <div class="">
            <h1>Ubah Data Peminjaman Buku</h1>
            <div class="bg-body-tertiary p-5 rounded my-3">
                <form action="{{ route('admin.updateTransaksi', ['id_transaksi' => $transaksi->id_transaksi]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="form-label">Kode Buku </label>
                        <input type="text" class="form-control disabled" value="{{ $transaksi->kode_buku }}" name="kode_buku" disabled />
                    </div>
                    <div>
                        <label class="form-label">Judul Buku </label>
                        <input type="text" class="form-control disabled" value="{{ $transaksi->buku->judul_buku }}" name="judul_buku" disabled />
                    </div>
                    <div>
                        <label class="form-label">Nama Siswa </label>
                        <input type="text" class="form-control disabled" value="{{ $transaksi->siswa->nama_siswa }}" name="nama_siswa" disabled />
                    </div>
                    <div>
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control disabled" value="{{ $transaksi->siswa->kelas }} {{ $transaksi->jurusan }}" disabled name="kelas" />
                    </div>
                    <div>
                        <label class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control disabled" value="{{ $transaksi->tanggal_pinjam }}" name="tanggal_pinjam" disabled />
                    </div>
                    <div>
                        <label class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" value="{{ $transaksi->tanggal_pengembalian }}" name="tanggal_pengembalian" />
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-outline-dark">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-masterAdmin>