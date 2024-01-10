@extends('layouts.masteruser')

@section('contents')
<p class="h2">Table Data Mahasiswa</p>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">ID Mahasiswa</th>
      <th scope="col">NIS</th>
      <th scope="col">
        Nama Lengkap
        <div class="btn dropright"  role="group">
          <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-filter" style="font-size:10px"></i>
          </button>
          <div class="dropdown-menu">
            <a href="{{ url('users?sortNama=asc') }}" class="btn btn-outline-primary btn-sm {{ $sortOrderNama == 'asc' ? 'active' : '' }}">
              ↑A
            </a>
            <a href="{{ url('users?sortNama=desc') }}" class="btn btn-outline-primary btn-sm {{ $sortOrderNama == 'desc' ? 'active' : '' }}">
              ↓Z
            </a>
          </div>
        </div>
        
            
        </div>
    </th>
      <th scope="col">Program Studi</th>
      <th scope="col">Level</th>
      <th scope="col">Fasilitator</th>
      <th scope="col">Nilai</th>
      <th scope="col">Presensi SoftSkill</th>
      <th scope="col">Nilai Akhir</th>
      <th scope="col">Grade</th>
      
    </tr>
  </thead>
  @foreach($hasil as $u)
    <tr>
      <td>{{ $u->id }}</td>
      <td>{{ $u->nim }}</td>
      <td>{{ $u->nama }}</td>
      <td>{{ $u->prodi }}</td>
      <td>{{ $u->level }}</td>
      <td>{{ $u->fasilitator }}</td>
      <td>{{ $u->nilai }}</td>
      <td>{{ $u->presensisoftskill }}</td>
      <td>{{ $u->nilaiakhir }}</td>
      <td>{{ $u->grade }}</td>
    </tr>
    @endforeach
</table>
@endsection