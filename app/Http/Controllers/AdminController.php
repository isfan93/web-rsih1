<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Dokter;
use App\Models\JadwalA;
// use Illuminate\Console\View\Components\Alert;
// use Alert;
use App\Models\Layanan;
use App\Models\Rekanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.body');
    }

    public function layanan()
    {
        return view('admin.layanan_a');
    }

    public function layanan_all(Request $req)
    {
        if ($req->has('search')) {
            $lay = Layanan::where('nama_layanan', 'LIKE', '%' . $req->search . '%')->paginate(5);
        } else {
            $lay = Layanan::paginate(5);
        }
        return view('admin.layanan_a', ['layanan' => $lay]);
    }

    public function add_layanan(Request $req)
    {
        $this->validate($req, [
            'nama_layanan' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        $file = $req->file('gambar');
        $nama_file = $file->getClientOriginalName();
        $folder_tujuan = 'img/layanan';
        $file->move($folder_tujuan, $nama_file);

        Layanan::create([
            'nama_layanan' => $req->nama_layanan,
            'gambar' => $nama_file
        ]);
        Alert::success('Data Berhasil disimpan');
        return redirect('/layanan');
    }

    public function hapus_layanan($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        return redirect('/layanan');
    }

    public function update_layanan($id, Request $req)
    {
        $layanan = Layanan::find($id);
        
        if($req->file('gambar') == ""){
            $layanan->update([
                'nama_layanan' => $req->nama_layanan
            ]);
            Alert::success('Data Berhasil diubah');
            return redirect('/layanan');
        } else {
            //hapus gambar lama
            // Storage::disk('local')->delete('img/layanan/'.$layanan->gambar);

            //upload gambar baru
            $file = $req->file('gambar');
            $nama_file = $file->getClientOriginalName();
            $folder_tujuan = 'img/layanan';
            $file->move($folder_tujuan, $nama_file);

            $layanan->nama_layanan = $req->nama_layanan;
            $layanan->gambar = $nama_file;
            $layanan->save();
            Alert::success('Data Berhasil di ubah');
             return redirect('/layanan');
        }

        
        // return redirect('/layanan');
    }

    public function dokter()
    {
        return view('admin.dokter_a');
    }

    public function dokter_all(Request $req)
    {
        if ($req->has('search')) {
            $dok = Dokter::where('nama_dok', 'LIKE', '%' . $req->search . '%')->paginate(5);
        } else {
            $dok = Dokter::paginate(5);
        }
        return view('admin.dokter_a', ['dokter' => $dok]);
    }

    public function add_dokter(Request $req)
    {
        $this->validate($req, [
            'nama_dok' => 'required',
            'id' => 'required',
            'pendidikan' => 'required',
            'pelatihan' => 'required',
            'keahlian' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        $file = $req->file('foto');
        $nama_file = $file->getClientOriginalName();
        $folder_tujuan = 'img/foto dokter';
        $file->move($folder_tujuan, $nama_file);

        Dokter::create([
            'nama_dok' => $req->nama_dok,
            'poli_id' => $req->id,
            'pendidikan' => $req->pendidikan,
            'pelatihan' => $req->pelatihan,
            'keahlian' => $req->keahlian,
            'foto' => $nama_file
        ]);
        Alert::success('Data Berhasil disimpan');
        return redirect('/dokter');
    }

    public function hapus_dokter($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect('/dokter');
    }

    public function update_dokter($id, Request $req)
    {
        $dok = Dokter::find($id);

        if($req->file('foto') == ""){
            $dok->update([
                'nama_dok' => $req->nama_dok,
                'pendidikan' => $req->pendidikan,
                'pelatihan' => $req->pelatihan,
                'keahlian' => $req->keahlian,
            ]);
            Alert::success('Data Berhasil di ubah');
            return redirect('/dokter');
        } else {
            $file = $req->file('foto');
            $nama_file = $file->getClientOriginalName();
            $folder_tujuan = 'img/foto dokter';
            $file->move($folder_tujuan, $nama_file);

            $dok->foto = $nama_file;
            $dok->save();
            Alert::success('data berhasil di ubah');
            return redirect('/dokter');
        }
    }

    public function rekanan_all(Request $req)
    {
        if($req->has('search')) {
            $rekanan = Rekanan::where('nama_rekan','LIKE','%'.$req->search.'%')->get();
        } else {
            $rekanan = Rekanan::all();
        }
        return view('admin.rekanan', ['rekanan' => $rekanan]);
    }

    public function add_rekanan(Request $req) 
    {
        $this->validate($req, [
            'nama_rekan' => 'required',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        
        $file = $req->file('logo');
        $nama_file = $file->getClientOriginalName();
        // $ext_gambar = $gambar->getClientOriginalExtension();
        $folder_tujuan = 'img/rekanan';
        $file->move($folder_tujuan,$nama_file);

        Rekanan::create([
            'nama_rekan' => $req->nama_rekan,
            'logo' => $nama_file
        ]);

        Alert::success('Data Berhasil disimpan');
        return redirect('/rekanan');

    }

    public function hapus_rekanan($id)
    {
        $rekan = Rekanan::find($id);
        $rekan->delete($id);
        return redirect('/rekanan');
    }

    public function update_rekanan($id, Request $req)
    {
        $rekanan = Rekanan::find($id);
        
        if($req->file('logo') == ""){
            $rekanan->update([
                'nama_rekan' => $req->nama_rekan
            ]);
        }else{
            $file = $req->file('logo');
            $nama_file = $file->getClientOriginalName();
            // $ext_gambar = $gambar->getClientOriginalExtension();
            $folder_tujuan = 'img/rekanan';
            $file->move($folder_tujuan,$nama_file);

            $rekanan->nama_rekan = $req->nama_rekan;
            $rekanan->logo = $nama_file;    
            Alert::success('Data Berhasil di Update');
            $rekanan->save();
            return redirect('/rekanan');
        }
    }



    public function tjadwal(Request $req)
    {
        $this->validate($req, [
           'required' => 'dokter_id',
        ]);

        JadwalA::create([
            'dokter_id' => $req->dokter_id,
            // 'hari' => $req->hari,
            'senin' => $req->senin,
            'selasa' => $req->selasa,
            'rabu' => $req->rabu,
            'kamis' => $req->kamis,
            'jumat' => $req->jumat,
            'sabtu' => $req->sabtu,
            'minggu' => $req->minggu
        ]);

        Alert::success('Data Berhasil disimpan');
        return redirect('/dokter');
    }

    public function edtjadwal($id, Request $req)
    {
        $jadwal = JadwalA::find($id);
        $jadwal->senin = $req->senin;
        $jadwal->selasa = $req->selasa;
        $jadwal->rabu = $req->rabu;
        $jadwal->kamis = $req->kamis;
        $jadwal->jumat = $req->jumat;
        $jadwal->sabtu = $req->sabtu;
        $jadwal->minggu = $req->minggu;
        Alert::success('Data berhasil disimpan');
        $jadwal->save();
        return redirect('/jadwal');

    }

    public function admin_j(Request $req)
    {
        if ($req->has('search')) {
            $jadwal_dok = Dokter::where('nama_dok', 'LIKE', '%' . $req->search . '%')->get();
        } else {
            $jadwal_dok= Dokter::all();
        }

        return view('admin.jadwal', ['dokter' => $jadwal_dok]);
    }

    public function media_all(Request $req){
        
        if ($req->has('search')) {
            $media = Post::where('title', 'LIKE', '%' . $req->search . '%')->get();
        } else {
            $media= Post::all();
        }
        return view('admin.media', ['posts' => $media]);
    
    }

    public function add_media(Request $req) {
        $this->validate($req, [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        
        $file = $req->file('gambar');
        $name_gambar = $file->getClientOriginalName();
        // $ext_gambar = $gambar->getClientOriginalExtension();
        $folder_tujuan = 'img/media';
        $file->move($folder_tujuan,$name_gambar);

        Post::create([
            'title' => $req->title,
            'excerpt' => $req->excerpt,
            'body' => $req->body,
            'gambar' => $name_gambar
        ]);

        Alert::success('Data Berhasil Disimpan');
        return redirect('/media');
    }

    public function testi()
    {
        $testi = Testimoni::all();
        return view('admin.testi', ['testi' => $testi]);
    }

    public function testi_tambah(Request $req) 
    {
        $this->validate($req, [
            'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
            'isi_testimoni' => 'required'
        ]);

        $file = $req->file('foto');
        $name_foto = $file->getClientOriginalName();
        $folder_tujuan = 'img/foto_testimoni';
        $file->move($folder_tujuan,$name_foto);

        Testimoni::create([
            'nama' => $req->nama,
            'foto' => $name_foto,
            'isi_testimoni' => $req->isi_testimoni,
        ]);
        Alert::success('Data Berhasil disimpan');
        return redirect('/testimoni');

    }

    public function testi_update($id, Request $req)
    {
        $testi = Testimoni::find($id);
        if($req->file('foto') == "" ){
            $testi->update([
                'nama' => $req->nama,
                'isi_testimoni' => $req->isi_testimoni,
            ]);
        }else {
            $file = $req->file('foto');
            $name_foto = $file->getClientOriginalName();
            $folder_tujuan = 'img/foto_testimoni';
            $file->move($folder_tujuan,$name_foto);

            $testi->nama = $req->nama;
            $testi->isi_testimoni = $req->isi_testimoni;
            $testi->foto = $name_foto;
    
            Alert::success('Data Berhasil disimpan');
            $testi->save();
            return redirect('/testimoni');
        }
    }

    public function hapus_testi($id)
    {
        $testi = Testimoni::find($id);
        $testi->delete($id);
        return redirect('/testimoni');
    }
}
