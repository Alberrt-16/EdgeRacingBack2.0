<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DriverSeeder extends Seeder
{
    public function run(): void
    {
        $drivers = [
            [
                'first_name' => 'Lewis',
                'last_name' => 'Hamilton',
                'birth_date' => '1985-01-07',
                'birth_country' => 'United Kingdom',
                'car_number' => 44,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Lewis_Hamilton_2016_Malaysia_2.jpg',
                'active' => true,
                'team_id' => 1, // Mercedes
            ],
            [
                'first_name' => 'Max',
                'last_name' => 'Verstappen',
                'birth_date' => '1997-09-30',
                'birth_country' => 'Netherlands',
                'car_number' => 1,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Max_Verstappen_2017_Malaysia_2.jpg',
                'active' => true,
                'team_id' => 2, // Red Bull Racing
            ],
            [
                'first_name' => 'Fernando',
                'last_name' => 'Alonso',
                'birth_date' => '1981-07-29',
                'birth_country' => 'Spain',
                'car_number' => 14,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f7/Fernando_Alonso_2016_Malaysia_1.jpg',
                'active' => true,
                'team_id' => 3, // Aston Martin
            ],
            [
                'first_name' => 'Sebastian',
                'last_name' => 'Vettel',
                'birth_date' => '1987-07-03',
                'birth_country' => 'Germany',
                'car_number' => 5,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Sebastian_Vettel_2015_Malaysia_2.jpg',
                'active' => false,
                'team_id' => 4, // Ferrari
            ],
        ];

        foreach ($drivers as $driver) {
            Driver::create($driver);
        }
    }
}
