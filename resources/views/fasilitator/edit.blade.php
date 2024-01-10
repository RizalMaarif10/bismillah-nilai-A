<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@extends('layouts.masterfasil')
@section('contents')
<h1>EDIT DATA</h1>
<form action='update' method='post'>
    @csrf
    @foreach($fasilitator as $user )
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" name='nim' readonly value ='{{$user->nim}}'>  
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" readonly>Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name='nama' readonly value ='{{$user->nama}}'>
                </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" >Nilai</label>
                <div class="col-sm-10">
                    <input type="number" name='nilai'  value ='{{$user->nilai}}'>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" >Nilai Presensi</label>
                <div class="col-sm-10">
                    <input type="number" name='presensisoftskill'  value ='{{$user->presensisoftskill}}'>
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
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        @endforeach
</form>
@endsection
