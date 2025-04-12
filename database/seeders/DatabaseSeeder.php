<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nik' => '1234567890123456',
            'name' => 'Admin RT',
            'nomor_telepon' => '081234567890',
            'email' => 'adminsirt@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    }
}
