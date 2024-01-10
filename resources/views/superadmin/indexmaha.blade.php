@extends('layouts.master')

@section('contents')
    <p class="h2">Table Data Mahasiswa</p>
    <a href='mahasiswa/create' class="btn btn-primary"> Tambah Data </a><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID Mahasiswa</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Level</th>
      <th scope="col">Fasilitator</th>
      <th scope="col">Nilai</th>
      <th scope="col">Presensi SoftSkill</th>
      <th scope="col">Nilai Akhir</th>
      <th scope="col">Grade</th>
      <th scope="col">Opsi</th>
            </tr>
        </thead>
        @php $no=1;@endphp
        @foreach ($hasil as $u)
            <tr>
    <td>{{ $no++}}</td>
      <td>{{ $u->nim }}</td>
      <td>{{ $u->nama }}</td>
      <td>{{ $u->prodi }}</td>
      <td>{{ $u->level }}</td>
      <td>{{ $u->fasilitator }}</td>
      <td>{{ $u->nilai }}</td>
      <td>{{ $u->presensisoftskill }}</td>
      <td>{{ $u->nilaiakhir }}</td>
      <td>{{ $u->grade }}</td>
                <td>
                    <a href='mahasiswa/edit{{ $u->nim}}' class="btn btn-warning">Edit</a>
                    <a href='mahasiswa/hapus{{ $u->nim }}' class="btn btn-danger">Del</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
