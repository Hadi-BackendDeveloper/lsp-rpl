<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 d-flex justify-content-center">
                <div class="card border-0 shadow-sm rounded" style="width: 30em">
                    <div class="card-body">
                        <img src="{{ asset('/storage/posts/'.$post->gambar) }}" class="rounded card-img" width="200px" height="500px">
                        <hr>
                        <table>
                            <tr>
                                <td class="fs-4 fw-bold">Nama</td>
                                <td class="fs-4 fw-bold"> : </td>
                                <td class="fs-4">{{ $post->nama_siswa }}</td>
                            </tr>
                            <tr>
                                <td class="fs-4 fw-bold">Kelas</td>
                                <td class="fs-4 fw-bold"> : </td>
                                <td class="fs-4">{{ $post->kelas }} {{ $post->jurusan }}</td>
                            </tr>
                        </table>
                        {{-- <h4>{{ $post->nama_siswa }}</h4>
                        <p class="tmt-3">
                            {!! $post->content !!}
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>