<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Dokter;
use App\Models\JadwalA;
use App\Models\JadwalB;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function visimisi()
    {
        return view('visimisi');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function penghargaan()
    {
        return view('penghargaan');
    }

    public function mitra()
    {
        return view('mitra');
    }

    public function ugd()
    {
        return view('ugd');
    }

    public function ranap()
    {
        return view('ranap');
    }

    public function vvip()
    {
        return view('ranap.vvip');
    }

    public function vip()
    {
        return view('ranap.vip');
    }

    public function kelas1()
    {
        return view('ranap.kelas1');
    }
    public function kelas2()
    {
        return view('ranap.kelas2');
    }
    public function kelas3()
    {
        return view('ranap.kelas3');
    }
    public function utama()
    {
        return view('ranap.utama');
    }
    public function hcu_icu()
    {
        return view('ranap.hcu');
    }

    public function hcu()
    {
        return view('intensif.hcu');
    }
    public function icu()
    {
        return view('intensif.icu');
    }
    public function picu()
    {
        return view('intensif.picu');
    }
    public function isolasi()
    {
        return view('intensif.isolasi');
    }


    public function rajal()
    {
        return view('rajal');
    }

    public function penunjang()
    {
        return view('penunjang');
    }

    public function rad()
    {
        return view('penunjang.rad');
    }

    public function farmasi()
    {
        return view('penunjang.farmasi');
    }

    public function gizi()
    {
        return view('gizi');
    }

    public function tarif_k()
    {
        return view('tarif_kamar');
    }

    public function fasilitas_u()
    {
        return view('fasilitas_u');
    }

    public function tarif_p()
    {
        return view('tarif_penunjang');
    }

    public function blog()
    {
        return view('blog');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function mcu()
    {
        return view('mcu');
    }

    public function pelpro()
    {
        return view('pelpro');
    }

    public function tampil_a()
    {
        $jadwal_a = Poli::all();
        return view('rajal', ['poli' => $jadwal_a]);
    }

    public function dokter(Request $req)
    {

        if ($req->has('search')) {
            $dok = Dokter::where('nama_dok', 'LIKE', '%' . $req->search . '%')->paginate(10);
        } else {
            $dok = Dokter::paginate(10);
            Dokter::orderByDesc('poli_id');
        }

        if ($req->has('search')) {
            $poli = Poli::where('nama_poli', 'LIKE', '%' . $req->search . '%')->get();
        } else {
            $poli = Poli::all();
            // Poli::orderByDesc('poli_id');
        }

        return view('rajal-dokter', ['dokter' => $dok, 'poli' => $poli ]);
    }


    public function admin()
    {
        return view('admin.dashboard');
    }

    public function layanan_a()
    {
        return view('layanan_a');
    }

    public function maintenance()
    {
        return view('maintenance');
    }

    public function layanan()
    {
        $layanan = Layanan::all();
        return view('home', ['layanan' => $layanan]);
    }

    public function poli($id)
    {
        $poli = Poli::find($id);
        return view('poli', ['poli' => $poli]);
    }
}
