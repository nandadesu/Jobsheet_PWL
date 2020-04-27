@extends('master')
@section('title', 'Validasi Data')
@section('judul_halaman', 'Validasi Data Mahasiswa')
@section('konten')
<h3 class="my-4">Data Yang Di Input :</h3>

    <table class="table table-bordered table-striped">
        <tr>
            <td style="width:150px">Nama</td>
            <td>{{ $data->nama }}</td>
        </tr>
        <tr>
            <td style="width:150px">Nim</td>
            <td>{{ $data->nim }}</td>
        </tr>
        <tr>
            <td style="width:150px">Email</td>
            <td>{{ $data->email }}</td>
        </tr>
        <tr>
            <td style="width:150px">Jurusan</td>
            <td>{{ $data->jurusan }}</td>
        </tr>
    </table>

    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
@endsection