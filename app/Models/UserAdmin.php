<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserAdmin extends Authenticatable
{
    use Notifiable;

    protected $table = 'user_admin';
    protected $fillable = ['name', 'username', 'email', 'password'];

    protected $hidden = [
        'password',
        // 'remember_token',
    ];
}
