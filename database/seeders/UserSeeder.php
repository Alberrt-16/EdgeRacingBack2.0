<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'adimn@example.com',
            'password' => hash('sha256', '123456'),
        ]);

        User::create([
            'name' => 'Albert',
            'email' => 'albert@sigmas.com',
            'password' => hash('sha256', 'p@ssw0rd'),
        ]);
    }
}
