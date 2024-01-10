<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserrController extends Controller
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
        
        $sortOrderNama = $request->input('sortNama', 'asc'); // default to ascending if not provided
        $query->orderBy('nama', $sortOrderNama);

        $hasil = $query->paginate($jumlahbaris);

        // Pass the year filter value and sorting order to the view
        return view('userr.index')->with('hasil', $hasil)
            ->with('katakunci', $katakunci)
            ->with('tahunFilter', $tahunFilter)
            ->with('sortOrderNama', $sortOrderNama);
    
        // Pass the year filter value to the view
        return view('userr.index')->with('hasil',$hasil)->with('katakunci', $katakunci)->with('tahunFilter', $tahunFilter);
    
        $hasil = DB::table('users')->get();

    }
        }
        
