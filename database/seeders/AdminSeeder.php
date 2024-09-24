<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_admin')->insert([
            'name' => 'Admin',
            'username'=>'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
