<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(attributes: [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'team_id' => null,
        ]);
        
        User::create([
            'name' => 'Albert',
            'email' => 'albert@sigma.com',
            'password' => Hash::make('p@ssw0rd'),
            'role' => 'guest',
            'team_id' => null,
        ]);

        User::create([
            'name' => 'RB Admin',
            'email' => 'RBTeam@edgeracing.com',
            'password' => Hash::make('RBRacing'),
            'role' => 'teamManager',
            'team_id' => 1
        ]);
    }
}
