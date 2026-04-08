<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Lapor Sungsang',
            'email' => 'admin@laporsungsang.com',
            'password' => bcrypt('password')
        ])->assignRole('admin');
    }
}
