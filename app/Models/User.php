<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Atribut yang dapat diisi massal.
     *
     * @var array
     */
    protected $table = 'user';
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * Atribut yang harus disembunyikan untuk array.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }
    /**
     * Atribut yang harus di-cast menjadi tipe data lain.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
