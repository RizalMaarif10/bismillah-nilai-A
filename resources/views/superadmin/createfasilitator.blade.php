@extends('layouts.master')

@section('contents')
<h1>TAMBAH DATA</h1>
<form action='/superadmin/fasilitator/store' method='post'>
    @csrf 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="number" name='nidn'>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name='nama'>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <select name="prodi">
                        <option selected>Program Studi</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                     </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text"name='password'>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
</form>
@endsection
