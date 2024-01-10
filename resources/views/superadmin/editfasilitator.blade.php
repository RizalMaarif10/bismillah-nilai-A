<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@extends('layouts.master')
@section('contents')
<h1>EDIT DATA</h1>
<form action='/superadmin/fasilitator/update' method='post'>
    @csrf
    @foreach($superadmin as $user )
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="number" name='nidn'  value ='{{$user->nidn}}'>  
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name='nama' value ='{{$user->nama}}'>
                </div>
            </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select name="prodi" >
                            <option selected value ='{{$user->prodi}}'>Program Studi</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                         </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" name='password' value ='' placeholder="Masukan Password">
                    </div>
                </div>
            
            <div class="mb-3 row">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        @endforeach
</form>
@endsection
