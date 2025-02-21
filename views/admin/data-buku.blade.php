<x-masterAdmin>
    <div class="container vh-100">
        <div class="h-100 d-flex justify-content-center flex-column align-items-center">
            <div class="container d-flex justify-content-between mb-2">
                <h2>Data Buku Perpustakaan</h2>
                <a href="{{ route('admin.tambahDataBuku') }}" class="btn btn-sm btn-success">Tambah data buku</a>
            </div>
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($buku as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->kode_buku }}</td>
                        <td>{{ $item->judul_buku }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->tahun }}</td>
                        <td>
                            <a href="{{ route('admin.editBuku', $item->kode_buku) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.destroyBuku', $item->kode_buku) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-masterAdmin>