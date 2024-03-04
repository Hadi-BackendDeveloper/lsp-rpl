<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Pendataan Kebutuhan Alat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-image: url('https://img.freepik.com/free-vector/flat-geometric-background_23-2148957201.jpg?w=1380&t=st=1709566928~exp=1709567528~hmac=b385ad53f67de851b4da3e774fa47c98322bcd9c77da6ecd6a68393435993375');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center fs-2 fw-bolder">EDIT DATA BARANG</h2>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="fw-bold">GAMBAR</label><br />
                                <input type="file" class="form-control" name="gambar">
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">NAMA BARANG</label>
                                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang', $post->nama_barang) }}" placeholder="Masukkan Nama Barang">
                            
                                <!-- error message untuk title -->
                                @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">JUMLAH</label>
                                <input type="text" class="form-control @error('jumlah_barang') is-invalid @enderror" name="jumlah_barang" value="{{ old('jumlah_barang', $post->jumlah_barang) }}" placeholder="Masukkan Jumlah Barang">
                            
                                <!-- error message untuk content -->
                                @error('jumlah_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">SATUAN</label>
                                <input type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ old('satuan', $post->satuan) }}" placeholder="Contoh: Kg, Meter, Pcs">
                            
                                <!-- error message untuk content -->
                                @error('satuan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="fw-bold mt-2">HARGA</label>
                                <input type="text" class="form-control @error('harga_barang') is-invalid @enderror" name="harga_barang" value="{{ old('harga_barang', $post->harga_barang) }}" placeholder="CONTOH: 50000">
                            
                                <!-- error message untuk content -->
                                @error('harga_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>