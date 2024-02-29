@extends('master')

@section('konten')
  <h3 class="text-center">Contoh Data Siswa</h3>
  <button class="btn btn-dark mb-2">Tambah Data</button>
  <table class="table table-dark table-striped table-hover table-bordered border-dark">
    <thead>
      <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td><img src="https://warnaindonesiaphoto.com/wp-content/uploads/2021/09/PAKET-PAS-FOTO-IJAZAH-2-200x300.jpg" alt="Pas Photo" width="60" height="50"/></td>
        <td>{{ Auth::user()->name }}</td>
        <td>XII RPL</td>
      </tr>
    </tbody>
  </table>
@endsection