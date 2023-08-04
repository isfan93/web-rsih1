<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalA extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['dokter_id', 'senin', 'selasa','rabu','kamis','jumat','sabtu'];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
