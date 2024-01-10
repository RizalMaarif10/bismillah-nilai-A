<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminFasilController;
use App\Http\Controllers\SuperadminMahaController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\FasilitatorController;
use App\Http\Controllers\UserrController;
use App\Http\Controllers\TestController;


Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});


Route::group(['middleware' => ['auth:user,fasilitator,superadmin']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::group(['middleware' => ['auth:user,fasilitator,superadmin']], function() {
    Route::get('/userr', [UserrController::class, 'index']);
    Route::resource('users',UserrController::class);
});

Route::group(['middleware' => ['auth:user,fasilitator,superadmin']], function() {
    Route::get('/superadmin', [SuperadminController::class,'index']);
    
    Route::get('/superadmin/fasilitator',[SuperadminFasilController::class,'index']);
    Route::get('/superadmin/fasilitator/create',[SuperadminFasilController::class,'createfasilitator']);
    Route::post('/superadmin/fasilitator/store',[SuperadminFasilController::class,'storefasilitator']);
    Route::get('/superadmin/fasilitator/edit{nidn}',[SuperadminFasilController::class,'editfasilitator']);
    Route::post('/superadmin/fasilitator/update',[SuperadminFasilController::class,'updatefasilitator']);
    Route::get('/superadmin/fasilitator/hapus{nidn}',[SuperadminFasilController::class,'hapusfasilitator']);

    Route::get('/superadmin/mahasiswa',[SuperadminMahaController::class,'index']);
    Route::get('/superadmin/mahasiswa/create',[SuperadminMahaController::class,'createmahasiswa']);
    Route::post('/superadmin/mahasiswa/update',[SuperadminMahaController::class,'updatemahasiswa']);
    Route::get('/superadmin/mahasiswa/edit{nim}',[SuperadminMahaController::class,'editmahasiswa']);
    Route::post('/superadmin/mahasiswa/storemahasiswa',[SuperadminMahaController::class,'storemahasiswa']);
    Route::get('/superadmin/mahasiswa/hapus{nim}',[SuperadminMahaController::class,'hapusmahasiswa']);
});


Route::group(['middleware' => ['auth:user,fasilitator,superadmin']], function() {
    Route::get('fasilitator', [FasilitatorController::class, 'index']);
    Route::post('fasilitator/update',[FasilitatorController::class,'update']);
    Route::get('fasilitator/edit{nim}',[FasilitatorController::class,'prosesnilai']);
    Route::get('fasilitator/edit{nim}',[FasilitatorController::class,'edit']);

});

Route::get('/master',[TestController::class,'test']);