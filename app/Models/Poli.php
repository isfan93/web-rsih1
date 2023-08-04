<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{

    protected $table = 'poli_a';
    protected $fillable = ['nama_poli', 'keterangan', 'gambar','logo'];

    public function dokter()
    {
        return $this->hasOne(Dokter::class);
    }
}
