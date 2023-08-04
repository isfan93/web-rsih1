<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DokterController extends Controller
{
   
    public function dokter_view(Request $req)
    {
        if ($req->has('search')) {
            $dok = Dokter::where('nama_dok', 'LIKE', '%' . $req->search . '%')->get();
        } else {
            // $dok = Dokter::all();
            $dok = Dokter::orderByDesc('poli_id')->get();
        }
        return view('dokter_view', ['dokter' => $dok]);
    }

    public function dokter_profile($id){
        $dokter = Dokter::find($id);
        return view('dokter_profile', ['dokprof'=>$dokter]);
    }
}
