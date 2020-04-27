@extends('master')
<!-------isi title--->
@section('title', 'Tambah Data')

<!------isi bagian judul halaman---->
@section('judul_halaman', 'Tambah Data Mahasiswa')

<!------isi bagian konten------->
@section('konten')

<h3 class="my-4">Data yang di input:    </h3>

    <table class = "table table-bordered table-striped">
        <tr>
            <td style = "width:1150px">Nama</td>
            <td>{{$data->nama}}</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>{{$data->nim}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$data->email}}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>{{$data->jurusan}}</td>
        </tr>
    </table>

    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
@endsection