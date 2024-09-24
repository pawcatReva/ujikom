<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $fillable = [
        'nama',
        'nm_barang',
        'jumlah',
        'alamat',
        // 'user_id', 
    ];
     public function user()
    {
        return $this->hasMany(User::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
