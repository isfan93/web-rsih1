<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penunjang extends Model
{
    protected $table = 'penunjang';
    protected $fillable = ['id','penunjang','layanan_p','keterangan','p1','p2','p3','p4','p5','p6','p7','p8','p9','p10','gambar'];
}
