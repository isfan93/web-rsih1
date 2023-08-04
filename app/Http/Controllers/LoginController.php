<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function login_proses(Request $req){
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if(Auth::attempt($data)){
            $req->session()->put('name');
            $req->session()->has('name','Admin');
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email Atau Pasword Salah');
        }
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->forget('name');
        return redirect()->route('login')->with('success','Anda berhasil logout');
    }

}
