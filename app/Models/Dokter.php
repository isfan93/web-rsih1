<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $fillable = ['id', 'nama_dok', 'poli_id', 'pendidikan', 'pelatihan', 'keahlian', 'foto'];

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }

    public function jadwal()
    {
        return $this->hasMany(JadwalA::class);
    }

    public function keahlian()
    {
        return $this->belongsTo(Keahlian::class);
    }
}
