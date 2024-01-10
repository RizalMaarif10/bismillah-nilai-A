<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class SuperadminFasilController extends Controller
{
    public function index(){
        $cek = DB::table('fasilitators')->get();
        return view('superadmin.indexfasil',['cek'=>$cek]);
        }
        public function createfasilitator(){
            return view('superadmin.createfasilitator');
        }
        public function storefasilitator(Request $request){
            DB::table('fasilitators')->insert([
                'nidn'=>$request->nidn,
                'nama'=>$request->nama,
                'prodi'=>$request->prodi,
                'password' => Hash::make($request->password)
            ]);
            return redirect('/superadmin/fasilitator');
        }
        public function editfasilitator($nidn){
            $superadmin = DB::table('fasilitators')->where('nidn',$nidn)->get();
            return view('superadmin.editfasilitator',['superadmin'=>$superadmin]);
            }
        public function updatefasilitator(Request $request){
            //print_r($request->password);
            //echo "<pre>";
            //print_r(Hash::make($request->password));
            //exit;

            if(empty ($request->password)){
                $superadmin = DB::table('fasilitators')->where('nidn',$request->nidn)->first();
                DB::table('fasilitators')->where('nidn',$request->nidn)->update([
                    'nidn'=>$request->nidn,
                    'nama'=>$request->nama,
                    'prodi'=>$request->prodi,
                    'password' =>$superadmin->password
                    ]);
                    return redirect('/superadmin/fasilitator');
            }else{
                DB::table('fasilitators')->where('nidn',$request->nidn)->update([
                    'nidn'=>$request->nidn,
                    'nama'=>$request->nama,
                    'prodi'=>$request->prodi,
                    'password' => Hash::make($request->password)
                    ]);
                    return redirect('/superadmin/fasilitator');
            }
                
            }
        public function hapusfasilitator($nidn){
            DB::table('fasilitators')->where('nidn',$nidn)->delete();
            return redirect('/superadmin/fasilitator');
        }
}