<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranap extends Model
{
   protected $table = 'ranap';
   protected $fillable = [
                        'id',
                        'kelas',
                        'fas1',
                        'fas2',
                        'fas3',
                        'fas4',
                        'fas5',
                        'fas6',
                        'harga',
                        'gambar',
                        'gambar2',
                        'video',
   ];
}
