<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fasilitator;
use App\Models\superadmin;
use App\Models\Role;
use Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dologin(Request $request) {
        if (Auth::guard('fasilitator')->attempt(['nama'=>$request->nama,'password'=>$request->password])) {
            return redirect ('/fasilitator');
        
        }elseif (Auth::guard('user')->attempt(['nama'=>$request->nama,'password'=>$request->password])) {
            return redirect ('/userr');
        
        }elseif (Auth::guard('superadmin')->attempt(['nama'=>$request->nama,'password'=>$request->password])) {
            return redirect ('/superadmin');
        }
        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
