<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class SuperadminMahaController extends Controller
{
    public function index(){
        $hasil = DB::table('users')->get();
        return view('superadmin.indexmaha',['hasil'=>$hasil]);
    }
        public function createmahasiswa(){
            return view('superadmin.createmahasiswa');
        }
        public function storemahasiswa(Request $request){
            DB::table('users')->insert([
                'nim'=>$request->nim,
                'nama'=>$request->nama,
                'prodi'=>$request->prodi,
                'password' => Hash::make($request->password),
                'level'=>$request->level,
                'fasilitator'=>$request->fasilitator?? 0,
                'nilai' => $request->nilai ?? 0,
                'presensisoftskill'=>$request->presensisoftskill ?? 0,
                'nilaiakhir'=>$request->nilaiakhir ?? 0,
                'grade' => $request->grade ?? 0
                
            ]);
            return redirect('/superadmin/mahasiswa');
        } 
        public function editmahasiswa($nim){
            $superadmin = DB::table('users')->where('nim',$nim)->get();
            return view('superadmin.editmahasiswa',['superadmin'=>$superadmin]);
            }
        public function updatemahasiswa(Request $request){

                DB::table('users')->where('nim',$request->nim)->update([
                'nim'=>$request->nim,
                'nama'=>$request->nama,
                'fasilitator'=>$request->fasilitator,
                'nilai'=>$request->nilai,
                'presensisoftskill'=>$request->presensisoftskill,
                'nilaiakhir'=>$nilaiakhir = $this->akhir($request->nilai, $request->presensisoftskill),
                    'grade'=>$grade = $this->hitungGrade($nilaiakhir)
                
                ]);
                
            return redirect('/superadmin/mahasiswa');
        
        }
        private function akhir($nilai,$presensisoftskill)
        {
            $nilaiakhir = ($nilai + $presensisoftskill)/2;
            return $nilaiakhir;
        }
        private function hitungGrade($nilaiakhir)
{
    if ($nilaiakhir >= 80) {
        return 'A';
    } elseif ($nilaiakhir >= 70) {
        return 'B';
    } elseif ($nilaiakhir >= 60) {
        return 'C';
    } elseif ($nilaiakhir >= 50) {
        return 'D';
    } else {
        return 'E';
    }
}
public function hapusmahasiswa($nim){
    DB::table('users')->where('nim',$nim)->delete();
    return redirect('/superadmin/mahasiswa');
}
}