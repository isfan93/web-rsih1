<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\TestimoniController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function(){
//     return view('home');
// });

// Route::get('{locale}/', function($locale){
//     App::setLocale($locale);
//     return view('home');
// });

Route::get('/', [MainController::class, 'index']);
Route::get('/', [MainController::class, 'layanan']);
// Route::get('/', [MainController::class, 'cari_poli_home']);
Route::get('/visimisi', [MainController::class, 'visimisi']);
Route::get('/sejarah', [MainController::class, 'sejarah']);
Route::get('/penghargaan', [MainController::class, 'penghargaan']);
Route::get('/mitra', [MainController::class, 'mitra']);
Route::get('/ugd', [MainController::class, 'ugd']);
Route::get('/ranap', [MainController::class, 'ranap']);
Route::get('/rajal', [MainController::class, 'rajal']);
Route::get('/penunjang', [MainController::class, 'penunjang']);
Route::get('/gizi', [MainController::class, 'gizi']);
Route::get('/tarif_kamar', [MainController::class, 'tarif_k']);
Route::get('/fasilitas_umum', [MainController::class, 'fasilitas_u']);
Route::get('/tarif_penunjang', [MainController::class, 'tarif_p']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/kontak', [MainController::class, 'kontak']);
Route::get('/mcu', [MainController::class, 'mcu']);
Route::get('/pelpro', [MainController::class, 'pelpro']);

Route::get('/rajal', [MainController::class, 'tampil_a']);
Route::get('/rajal-dokter', [MainController::class, 'dokter']);
// Route::get('/rajal-dokter', [MainController::class, 'dokter_all']);

Route::get('/vvip', [MainController::class, 'vvip']);
Route::get('/vip', [MainController::class, 'vip']);
Route::get('/kelas1', [MainController::class, 'kelas1']);
Route::get('/kelas2', [MainController::class, 'kelas2']);
Route::get('/kelas3', [MainController::class, 'kelas3']);
Route::get('/utama', [MainController::class, 'utama']);
Route::get('/hcu_icu', [MainController::class, 'hcu_icu']);


Route::get('/radiologi', [MainController::class, 'rad']);
Route::get('/farmasi', [MainController::class, 'farmasi']);

Route::get('/hcu',[MainController::class, 'hcu']);
Route::get('/icu',[MainController::class, 'icu']);
Route::get('/picu',[MainController::class, 'picu']);
Route::get('/isolasi',[MainController::class, 'isolasi']);
Route::get('/poli/{id}',[MainController::class, 'poli']);

Route::get('/dokter_view', [DokterController::class, 'dokter_view'])->name('dokter');
Route::get('/dokter_profile/{id}', [DokterController::class, 'dokter_profile']);
// Route::get('/admin', [MainController::class, 'admin']);


// blog routes
Route::get('/blog', [BlogController::class, 'all_post']);
// Route::get('/blog_single/{id}', [BlogController::class, 'single_post']);
Route::get('/blog_single/{id}',[BlogController::class, 'single_post']);
Route::get('/blog_single', [BlogController::class, 'single_post1']);

Route::get('/maintenance', [MainController::class, 'maintenance']);

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// middleware
Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});


Route::get('/layanan', [AdminController::class, 'layanan_all'])->name('layanan');
Route::post('/layanan/tambah', [AdminController::class, 'add_layanan'])->name('add_layanan');
Route::get('/layanan/hapus/{id}', [AdminController::class, 'hapus_layanan'])->name('hapus_layanan');
Route::post('/layanan/update/{id}', [AdminController::class, 'update_layanan'])->name('update_layanan');

Route::get('/dokter', [AdminController::class, 'dokter_all'])->name('dokter_all');
Route::post('dokter/tambah', [AdminController::class, 'add_dokter'])->name('add_dokter');
Route::get('/dokter/hapus/{id}', [AdminController::class, 'hapus_dokter'])->name('hapus_dokter');
Route::post('/dokter/update/{id}', [AdminController::class, 'update_dokter'])->name('update_dokter');

Route::get('/rekanan',[AdminController::class, 'rekanan_all'])->name('rekanan_all');
Route::post('/rekanan/tambah',[AdminController::class, 'add_rekanan'])->name('add_rekanan');
Route::get('/rekanan/hapus/{id}',[AdminController::class, 'hapus_rekanan'])->name('hapus_rekanan');
Route::post('/rekanan/update/{id}', [AdminController::class, 'update_rekanan'])->name('update_rekanan');

Route::post('/dokter/jadwal', [AdminController::class, 'tjadwal'])->name('tambah_dokter');

Route::get('/jadwal', [AdminController::class, 'admin_j'])->name('jadwal');
Route::post('/jadwal/edit_jadwal/{id}',[AdminController::class, 'edtjadwal']);
// Route::get('/media',[AdminController::class, 'media'])->name('media');
Route::get('/media', [AdminController::class, 'media_all'])->name('media-all');
Route::post('/media/tambah', [AdminController::class, 'add_media'])->name('add-media');

Route::get('/testimoni',[AdminController::class, 'testi'])->name('testimoni');
Route::post('/testimoni/tambah', [AdminController::class, 'testi_tambah'])->name('testi-tambah');
Route::post('/testimoni/update/{id}', [AdminController::class, 'testi_update'])->name('testi-update');
Route::get('/testimoni/hapus/{id}',[AdminController::class, 'hapus_testi']);


Route::get('/poli_a', [PoliController::class, 'all_poli']);
Route::post('/poli_a/tambah',[PoliController::class, 'tambah_poli']);
Route::get('/poli_a/hapus/{id}', [PoliController::class, 'hapus_poli'])->name('hapus-poli');
Route::post('/poli_a/update/{id}',[PoliController::class, 'update_poli'])->name('update-poli');



// Route::post('/')


