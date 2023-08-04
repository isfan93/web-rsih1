<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    use HasFactory;

    protected $table = 'keahlian';
    protected $fillable = ['nama_keahlian'];

    public function dokter()
    {
        return $this->hasOne(Dokter::class);
    }
}
