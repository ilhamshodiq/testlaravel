<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@sma404.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Hitagi Senjougahara',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'hitagi@sma404.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Budi Cahya',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'budi@sma404.com',
            'password' => bcrypt('password123')
        ]);
    }
}
