<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gizi extends Model
{
    protected $table = 'gizi';
    protected $fillable = ['nama_menu','gambar'];
}
