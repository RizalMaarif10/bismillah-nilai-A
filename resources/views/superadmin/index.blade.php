@extends('layouts.master')

@section('contents')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Fasilitator</div>
                            <?php
                            $koneksi = mysqli_connect("localhost","root","","softskill3")
                            or die (mysqli_connect_error());
                            $data = mysqli_query($koneksi,"SELECT * FROM fasilitators");
                            $jumlah_data = mysqli_num_rows($data);
                            ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_data ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Peserta SoftSkill</div>
                            <?php
                            $koneksi = mysqli_connect("localhost","root","","softskill3")
                            or die (mysqli_connect_error());
                            $data = mysqli_query($koneksi,"SELECT * FROM users");
     
                            // menghitung data barang
                            $jumlah_data = mysqli_num_rows($data);
                            ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_data ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

