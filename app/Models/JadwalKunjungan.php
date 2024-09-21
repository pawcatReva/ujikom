<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKunjungan extends Model
{
    use HasFactory;
    protected $table = 'jadwal_kunjungan';
    protected $guarded = ['']; 
}
