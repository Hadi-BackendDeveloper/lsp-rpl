<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center fs-2 fw-bolder">INPUT DATA NILAI</h2>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="fw-bold">PHOTO</label>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                            
                                <!-- pesan eror untuk foto -->
                                @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">NOMOR INDUK SISWA</label>
                                <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" placeholder="NIS Minimal 5 digit, contoh: 12345">
                            
                                <!-- pesan eror untuk nis -->
                                @error('nis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">NAMA SISWA</label>
                                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" value="{{ old('nama_siswa') }}" placeholder="Masukkan Nama Siswa">
                            
                                <!-- pesan eror untuk nama siswa -->
                                @error('nama_siswa')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">KELAS</label>
                                <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" placeholder="Masukkan Kelas">
                            
                                <!-- pesan error untuk kelas -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">JURUSAN</label>
                                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" placeholder="Pilih: AKL, PM, atau RPL" maxlength="3">
                            
                                <!-- pesan eror untuk jurusan -->
                                @error('jurusan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr />
                            <h3 class="fw-bold text-center">Data Nilai</h3>
                            <hr />
                            <div class="form-group">
                                <label class="fw-bold mt-2">BAHASA INDONESIA</label>
                                <input type="text" class="form-control @error('bahasa_indonesia') is-invalid @enderror" name="bahasa_indonesia" value="{{ old('bahasa_indonesia') }}" placeholder="Masukan 2 digit angka tanpa koma" maxlength="2">
                            
                                <!-- pesan eror untuk nilai bahasa indonesia -->
                                @error('bahasa_indonesia')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">BAHASA INGGRIS</label>
                                <input type="text" class="form-control @error('bahasa_inggris') is-invalid @enderror" name="bahasa_inggris" value="{{ old('bahasa_inggris') }}" placeholder="Masukan 2 digit angka tanpa koma" maxlength="2">
                            
                                <!-- pesan eror untuk nilai bahasa_inggris -->
                                @error('bahasa_inggris')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">MATEMATIKA</label>
                                <input type="text" class="form-control @error('matematika') is-invalid @enderror" name="matematika" value="{{ old('matematika') }}" placeholder="Masukan 2 digit angka tanpa koma" maxlength="2">
                            
                                <!-- pesan eror untuk nilai matematika -->
                                @error('matematika')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">PKN</label>
                                <input type="text" class="form-control @error('pkn') is-invalid @enderror" name="pkn" value="{{ old('pkn') }}" placeholder="Masukan 2 digit angka tanpa koma" maxlength="2">
                            
                                <!-- pesan eror untuk nilai pkn -->
                                @error('pkn')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">SENI BUDAYA</label>
                                <input type="text" class="form-control @error('senibudaya') is-invalid @enderror" name="senibudaya" value="{{ old('senibudaya') }}" placeholder="Masukan 2 digit angka tanpa koma" maxlength="2">
                            
                                <!-- pesan eror untuk nilai senibudaya -->
                                @error('senibudaya')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">AGAMA</label>
                                <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" placeholder="Masukan 2 digit angka tanpa koma" maxlength="2">
                            
                                <!-- pesan eror untuk nilai agama -->
                                @error('agama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="fw-bold mt-2">IPAS</label>
                                <input type="text" class="form-control @error('ipas') is-invalid @enderror" name="ipas" value="{{ old('ipas') }}" placeholder="Masukan 2 digit angka tanpa koma" maxlength="2">
                            
                                <!-- pesan eror untuk nilai ipas -->
                                @error('ipas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-danger">RESET</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>