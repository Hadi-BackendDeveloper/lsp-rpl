<x-masterAdmin>
    <div class="container vh-100 position-relative">
        <div class="">
            <h1>Ubah Data Buku</h1>
            <div class="bg-body-tertiary p-5 rounded my-3">
                <form action="{{ route('admin.update', $siswa->id_anggota) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label class="form-label">Nomor Induk Siswa</label>
                        <input class="form-control" value="{{ $siswa->nis }}" type="text" name="nis" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Nama Siswa</label>
                        <input class="form-control" value="{{ $siswa->nama_siswa }}" type="text" name="nama_siswa" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Kelas</label>
                        <input class="form-control" value="{{ $siswa->kelas }}" placeholder="X, XI, XII" type="text" name="kelas" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Jurusan</label>
                        <input class="form-control" value="{{ $siswa->jurusan }}" placeholder="AKL, BDP, RPL" type="text" name="jurusan" maxlength="3" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Username</label>
                        <input class="form-control" value="{{ $siswa->username }}" type="text" name="username" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" placeholder="Masukan password baru jika ingin mengganti password" name="password" />
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-sm btn-success" type="submit">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-masterAdmin>