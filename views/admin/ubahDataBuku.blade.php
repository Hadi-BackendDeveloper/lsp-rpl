<x-masterAdmin>
    <div class="container vh-100 position-relative">
        <div class="">
            <h1>Ubah Data Buku</h1>
            <div class="bg-body-tertiary p-5 rounded my-3">
                <form action="{{ route('admin.updateBuku', $buku->kode_buku) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label class="form-label">Kode Buku</label>
                        <input class="form-control" value="{{ $buku->kode_buku }}" type="text" name="kode_buku" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Judul Buku</label>
                        <input class="form-control" value="{{ $buku->judul_buku }}" type="text" name="judul_buku" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Pengarang</label>
                        <input class="form-control" value="{{ $buku->penulis }}" type="text" name="penulis" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Penerbit</label>
                        <input class="form-control" value="{{ $buku->penerbit }}" type="text" name="penerbit" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Tahun</label>
                        <input class="form-control" value="{{ $buku->tahun }}" type="text" name="tahun" />
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-sm btn-success" type="submit">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-masterAdmin>