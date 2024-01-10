@extends('layouts.master')

@section('contents')
<h1>TAMBAH DATA</h1>
<form action='/superadmin/mahasiswa/storemahasiswa' method='post'>
    @csrf 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name='nama'>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" name='nim'>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text"name='password'>
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
                <label class="col-sm-2 col-form-label">Nama Fasilitator</label>
                <div class="col-sm-10">
                    <select name='fasilitator'>
                        <option>Pilih Fasilitator</option>
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","softskill3")
                        or die (mysqli_connect_error());
                        $query = mysqli_query($koneksi,"SELECT * FROM fasilitators") or die (mysqli_error($koneksi));
                        while ($data = mysqli_fetch_array($query)){
                            echo "<option value=$data[nama]> $data[nama] </option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                    <select name="level">
                        <option selected>Level</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                     </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
</form>
@endsection
