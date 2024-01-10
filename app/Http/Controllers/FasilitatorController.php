<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use App\Models\User;

class FasilitatorController extends Controller
{
    public function index(Request $request){
        $katakunci = $request->katakunci;
        $tahunFilter = $request->tahun; // Get the year filter value
        $jumlahbaris = 30;
    
        $query = User::query();
    
        if (strlen($katakunci)) {
            $query->where('nim', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('prodi', 'like', "%$katakunci%")
                ->orWhere('level', 'like', "%$katakunci%");
        }
    
        // Add the year filter to the query
        if ($tahunFilter) {
            $query->where('level', $tahunFilter);
        }
        $hasil = $query->orderBy('nim', 'asc')->paginate($jumlahbaris);
    
        // Pass the year filter value to the view
        return view('fasilitator.index')->with('hasil',$hasil)->with('katakunci', $katakunci)->with('tahunFilter', $tahunFilter);
    
        $hasil = DB::table('users')->get();

    }
        public function edit($nim)
        {
            $fasilitator = DB::table('users')->where('nim',$nim)->get();
            return view('fasilitator.edit',['fasilitator'=>$fasilitator]);
        }
            public function update(Request $request){
                    DB::table('users')->where('nim',$request->nim)->update([
                    'nim'=>$request->nim,
                    'nama'=>$request->nama,
                    'fasilitator'=>$request->fasilitator,
                    'nilai'=>$request->nilai,
                    'presensisoftskill'=>$request->presensisoftskill,
                    'nilaiakhir'=>$nilaiakhir = $this->akhir($request->nilai, $request->presensisoftskill),
                    'grade'=>$grade = $this->hitungGrade($nilaiakhir)
                    
                    ]);
                    return redirect('/fasilitator');
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
    }



            
