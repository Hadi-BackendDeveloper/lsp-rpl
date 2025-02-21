<x-masterAdmin>
    <div class="container vh-100 position-relative">
        <div class="">
            <h1>Tambah Data Buku</h1>
            <div class="bg-body-tertiary p-5 rounded my-3">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Kode Buku</label>
                        <input class="form-control" type="text" name="kode_buku" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Judul Buku</label>
                        <input class="form-control" type="text" name="judul_buku" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Pengarang</label>
                        <input class="form-control" type="text" name="penulis" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Penerbit</label>
                        <input class="form-control" type="text" name="penerbit" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Tahun</label>
                        <input class="form-control" type="text" name="tahun" />
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-masterAdmin>