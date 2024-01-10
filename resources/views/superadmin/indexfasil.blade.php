@extends('layouts.master')

@section('contents')
    <p class="h2">Table Data Fasilitator</p>
    <a href='fasilitator/create' class="btn btn-primary"> Tambah Data </a><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">NIDN</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        @php $no=1;@endphp
        @foreach ($cek as $users)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $users->nidn }}</td>
                <td>{{ $users->nama }}</td>
                <td>{{ $users->prodi }}</td>
                <td>
                    <a href='fasilitator/edit{{ $users->nidn }}' class="btn btn-warning">Edit</a>
                    <a href='fasilitator/hapus{{ $users->nidn }}' class="btn btn-danger">Del</a>
                </td>
            </tr>
        @endforeach
    </table>
    @endsection