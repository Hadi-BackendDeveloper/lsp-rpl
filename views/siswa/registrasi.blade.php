<!doctype html>
<html lang="en">
    <head>
        <title>Halaman Registrasi</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>
    <body>
        <main class="vh-100" style="background-color: #856be2">
            <div class="container-fluid h-100">
                <div class="h-100 d-lg-flex justify-content-center align-items-center">
                    <div class="bg-body-secondary p-5 rounded" style="width: 70%">
                        <h2 class="text-center">Halaman Registrasi</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Nomor Induk Siswa : </label>
                                <input type="number" class="form-control" name="nis" maxlength="15" required />
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nama Siswa : </label>
                                <input type="text" class="form-control" name="nama_siswa" required />
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Kelas : </label>
                                <select name="kelas" class="form-control">
                                    <option selected>Pilih kelas</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Jurusan</label>
                                <select name="jurusan" class="form-control">
                                    <option selected>Pilih jurusan</option>
                                    <option value="AKL">Akuntansi dan Lembaga</option>
                                    <option value="BDP">Bisnis Daring dan Pemasaran</option>
                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Username : </label>
                                <input type="text" name="username" class="form-control" required />
                            </div>
                            <div class="mb2">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required />
                            </div>
                            <label class="form-label mt-2">Sudah punya akun.? login <a href="/">disini</a></label>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-outline-dark">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
