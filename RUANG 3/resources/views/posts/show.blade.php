<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/2693212/pexels-photo-2693212.png');
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <h1 class="text-center text-info fw-bold">Data Nilai</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 d-flex justify-content-center">
                <div class="card">
                    <div class="card-body" style="width: 100%">
                        <div class="d-flex justify-content-evenly">
                            <img src="{{ asset('/storage/posts/'.$post->gambar) }}" class="rounded" width="300px" height="300px">
                            <div class="d-flex gap-5">
                                <ul class="list-unstyled">
                                    <li><p class="fs-4"><b>NIS : </b>{{ $post->nis }}</p></li>
                                    <li><p class="fs-4"><b>Nama : </b>{{ $post->nama_siswa }}</p></li>
                                    <li><p class="fs-4"><b>Kelas : </b>{{ $post->kelas }} {{ $post->jurusan }}</p></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><p class="fs-4"><b>Bahasa Indonesia : </b>{{ $post->bahasa_indonesia }}</p></li>
                                    <li><p class="fs-4"><b>Bahasa Inggris : </b>{{ $post->bahasa_inggris }}</p></li>
                                    <li><p class="fs-4"><b>Matematika : </b>{{ $post->matematika }}</p></li>
                                    <li><p class="fs-4"><b>PKN : </b>{{ $post->pkn }}</p></li>
                                    <li><p class="fs-4"><b>Agama : </b>{{ $post->agama }}</p></li>
                                    <li><p class="fs-4"><b>IPAS : </b>{{ $post->ipas }}</p></li>
                                </ul>
                            </div>
                        </div>
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