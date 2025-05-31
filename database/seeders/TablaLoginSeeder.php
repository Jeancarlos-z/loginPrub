<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TablaLoginSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tabla_login')->insert([
            [
                'name' => 'Usuario1',
                'email' => 'usuario1@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Usuario2',
                'email' => 'usuario2@example.com',
                'password' => Hash::make('password456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
