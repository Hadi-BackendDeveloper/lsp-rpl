<x-masterAdmin>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="row gap-5">
            <div class="col-3">
                <div class="card p-3" style="width: 18rem;">
                    <img src="{{ asset('gambar/book.jpg') }}" class="card-img-top mb-3" alt="Buku">
                    <div class="card-body">
                      <a href="/admin/data-buku" class="d-flex justify-content-center btn btn-success">Data Buku</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card p-3" style="width: 18rem;">
                    <img src="{{ asset('gambar/account.png') }}" class="card-img-top" alt="Akun">
                    <div class="card-body">
                      <a href="/admin/data-anggota" class="d-flex justify-content-center btn btn-success">Data Anggota</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card p-3" style="width: 18rem;">
                    <img src="{{ asset('gambar/transaction.jpg') }}" class="card-img-top" alt="Transaksi">
                    <div class="card-body">
                      <a href="/admin/data-peminjaman" class="d-flex justify-content-center btn btn-success">Data Transaksi</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-masterAdmin>