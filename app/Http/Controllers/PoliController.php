<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PoliController extends Controller
{
    public function all_poli(Request $req)
    {
        if($req->has('search')) {
            $poli = Poli::where('nama_poli','Like','%'. $req->search .'%')->get();
        }else {
            $poli = Poli::all();
        }
        return view('admin.poli_a', ['poli' => $poli]);
    }

    public function tambah_poli(Request $req)
    {
        $this->validate($req, [
            'nama_poli' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        $file = $req->file('logo');
        $nama_file = $file->getClientOriginalName();
        $folder_tujuan = 'img/logo-poli';
        $file->move($folder_tujuan, $nama_file);

        $file2 = $req->file('gambar');
        $nama_file2 = $file->getClientOriginalName();
        $folder_tujuan2 = 'img/layanan';
        $file2->move($folder_tujuan2, $nama_file2);

        Poli::create([
            'nama_poli' => $req->nama_poli,
            'keterangan' => $req->keterangan,
            'logo'=> $nama_file,
            'gambar' => $nama_file2,
        ]);

        Alert::success('Data Berhasil disimpan');
        return redirect('/poli_a');
    }

    public function hapus_poli($id)
    {
        $poli = Poli::find($id);
        $poli->delete();
        return redirect('/poli_a');
    }


}
