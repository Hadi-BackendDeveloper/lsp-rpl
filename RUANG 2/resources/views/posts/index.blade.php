<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Pendataan Kebutuhan Alat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4 fw-bolder">Data Kebutuhan Lab Komputer</h3>  
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3 fw-bold">TAMBAH DATA BARANG</a>
                            <button onclick="window.print()" class="btn btn-md btn-info mb-3 text-light fw-bold">PRINT</button>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">NAMA BARANG</th>
                                <th scope="col">JUMLAH</th>
                                <th scope="col">HARGA SATUAN</th>
                                <th scope="col">JUMLAH HARGA</th>
                                <th scope="col">OPSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">{{ $posts->count() * ($posts->currentPage() - 1) + $loop->iteration }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/gambar/'.$post->gambar) }}" class="rounded" style="width: 60px; height: 60px;">
                                    </td>
                                    <td>{{ $post->nama_barang }}</td>
                                    <td>{{ $post->jumlah_barang }} {{ $post->satuan }}</td>
                                    <td>@currency ( $post->harga_barang ) / {{ $post->satuan }}</td>
                                    <td>@currency ( $post->harga_barang * $post->jumlah_barang )</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //Pesan saat input
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>