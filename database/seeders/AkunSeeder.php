<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin Surat Masuk',
                'email' => 'suratm@gmail.com',
                'ttd' => 'default.png',
                'role' => 0,
                'password' => bcrypt('8520'),
            ],
            [
                'name' => 'Admin Surat Keluar',
                'email' => 'suratk@gmail.com',
                'ttd' => 'default.png',
                'role' => 1,
                'password' => bcrypt('8520'),
            ],
            [
                'name' => 'Kepala Sekolah',
                'email' => 'kepala@gmail.com',
                'ttd' => 'default.png',
                'role' => 2,
                'password' => bcrypt('8520'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
