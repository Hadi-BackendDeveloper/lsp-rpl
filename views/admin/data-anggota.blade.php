<x-masterAdmin>
    <div class="container vh-100">
        <div class="h-100 d-flex justify-content-center flex-column align-items-center">
            <div class="container d-flex justify-content-between mb-2">
                <h2>Data Anggota Perpustakaan</h2>
            </div>
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($siswa as $anggota)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $anggota->nis }}</td>
                        <td>{{ $anggota->nama_siswa }}</td>
                        <td>{{ $anggota->kelas }}</td>
                        <td>{{ $anggota->jurusan }}</td>
                            <td><a href="{{ route('admin.edit', $anggota->id_anggota) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.destroy', $anggota->id_anggota) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-masterAdmin>