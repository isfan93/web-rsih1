<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCU extends Model
{
    protected $table = 'mcu';
    protected $fillabel = ['paket_mcu','tarif_personal'];
    
}
