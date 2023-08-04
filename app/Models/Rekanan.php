<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
    protected $table = 'rekanan_m';
    protected $fillable = ['id', 'nama_rekan', 'logo'];
}
