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
            // Red Bull Racing
            [
                'first_name' => 'Max',
                'last_name' => 'Verstappen',
                'birth_date' => '1997-09-30',
                'birth_country' => 'Netherlands',
                'car_number' => 1,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Max_Verstappen_2017_Malaysia_2.jpg',
                'active' => true,
                'team_id' => 1,
            ],
            [
                'first_name' => 'Liam',
                'last_name' => 'Lawson',
                'birth_date' => '2002-02-11',
                'birth_country' => 'New Zealand',
                'car_number' => 30,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8b/Liam_Lawson_2022.jpg',
                'active' => true,
                'team_id' => 1,
            ],
            // Mercedes
            [
                'first_name' => 'George',
                'last_name' => 'Russell',
                'birth_date' => '1998-02-15',
                'birth_country' => 'United Kingdom',
                'car_number' => 63,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4f/George_Russell_2020_Tuscany.jpg',
                'active' => true,
                'team_id' => 2,
            ],
            [
                'first_name' => 'Andrea Kimi',
                'last_name' => 'Antonelli',
                'birth_date' => '2006-08-25',
                'birth_country' => 'Italy',
                'car_number' => 12,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Andrea_Kimi_Antonelli_2023.jpg',
                'active' => true,
                'team_id' => 2,
            ],
            // Ferrari
            [
                'first_name' => 'Charles',
                'last_name' => 'Leclerc',
                'birth_date' => '1997-10-16',
                'birth_country' => 'Monaco',
                'car_number' => 16,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Charles_Leclerc_2019.jpg',
                'active' => true,
                'team_id' => 3,
            ],
            [
                'first_name' => 'Lewis',
                'last_name' => 'Hamilton',
                'birth_date' => '1985-01-07',
                'birth_country' => 'United Kingdom',
                'car_number' => 44,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Lewis_Hamilton_2016_Malaysia_2.jpg',
                'active' => true,
                'team_id' => 3,
            ],
            // McLaren
            [
                'first_name' => 'Lando',
                'last_name' => 'Norris',
                'birth_date' => '1999-11-13',
                'birth_country' => 'United Kingdom',
                'car_number' => 4,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Lando_Norris_2019.jpg',
                'active' => true,
                'team_id' => 4,
            ],
            [
                'first_name' => 'Oscar',
                'last_name' => 'Piastri',
                'birth_date' => '2001-04-06',
                'birth_country' => 'Australia',
                'car_number' => 81,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0e/Oscar_Piastri_2022.jpg',
                'active' => true,
                'team_id' => 4,
            ],
            // Aston Martin
            [
                'first_name' => 'Fernando',
                'last_name' => 'Alonso',
                'birth_date' => '1981-07-29',
                'birth_country' => 'Spain',
                'car_number' => 14,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f7/Fernando_Alonso_2016_Malaysia_1.jpg',
                'active' => true,
                'team_id' => 5,
            ],
            [
                'first_name' => 'Lance',
                'last_name' => 'Stroll',
                'birth_date' => '1998-10-29',
                'birth_country' => 'Canada',
                'car_number' => 18,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Lance_Stroll_2017_Malaysia_1.jpg',
                'active' => true,
                'team_id' => 5,
            ],
            // Alpine
            [
                'first_name' => 'Pierre',
                'last_name' => 'Gasly',
                'birth_date' => '1996-02-07',
                'birth_country' => 'France',
                'car_number' => 10,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Pierre_Gasly_2019.jpg',
                'active' => true,
                'team_id' => 6,
            ],
            [
                'first_name' => 'Jack',
                'last_name' => 'Doohan',
                'birth_date' => '2003-01-20',
                'birth_country' => 'Australia',
                'car_number' => 7,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/5/5e/Jack_Doohan_2022.jpg',
                'active' => true,
                'team_id' => 6,
            ],
            // Williams
            [
                'first_name' => 'Alex',
                'last_name' => 'Albon',
                'birth_date' => '1996-03-23',
                'birth_country' => 'Thailand',
                'car_number' => 23,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d3/Alexander_Albon_2019.jpg',
                'active' => true,
                'team_id' => 7,
            ],
            [
                'first_name' => 'Logan',
                'last_name' => 'Sargeant',
                'birth_date' => '2000-12-31',
                'birth_country' => 'United States',
                'car_number' => 2,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f5/Logan_Sargeant_2022.jpg',
                'active' => true,
                'team_id' => 7,
            ],
            // Stake F1 (Sauber)
            [
                'first_name' => 'Valtteri',
                'last_name' => 'Bottas',
                'birth_date' => '1989-08-28',
                'birth_country' => 'Finland',
                'car_number' => 77,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Valtteri_Bottas_2017_Malaysia_2.jpg',
                'active' => true,
                'team_id' => 8,
            ],
            [
                'first_name' => 'Zhou',
                'last_name' => 'Guanyu',
                'birth_date' => '1999-05-30',
                'birth_country' => 'China',
                'car_number' => 24,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Zhou_Guanyu_2022.jpg',
                'active' => true,
                'team_id' => 8,
            ],
            // Visa Cash App RB (ex-AlphaTauri)
            [
                'first_name' => 'Yuki',
                'last_name' => 'Tsunoda',
                'birth_date' => '2000-05-11',
                'birth_country' => 'Japan',
                'car_number' => 22,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Yuki_Tsunoda_2022.jpg',
                'active' => true,
                'team_id' => 9,
            ],
            [
                'first_name' => 'Daniel',
                'last_name' => 'Ricciardo',
                'birth_date' => '1989-07-01',
                'birth_country' => 'Australia',
                'car_number' => 3,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Daniel_Ricciardo_2016_Malaysia_3.jpg',
                'active' => true,
                'team_id' => 9,
            ],
            // Haas
            [
                'first_name' => 'Kevin',
                'last_name' => 'Magnussen',
                'birth_date' => '1992-10-05',
                'birth_country' => 'Denmark',
                'car_number' => 20,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Kevin_Magnussen_2017_Malaysia.jpg',
                'active' => true,
                'team_id' => 10,
            ],
            [
                'first_name' => 'Nico',
                'last_name' => 'Hülkenberg',
                'birth_date' => '1987-08-19',
                'birth_country' => 'Germany',
                'car_number' => 27,
                'profile_image' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Nico_Hulkenberg_2016_Malaysia.jpg',
                'active' => true,
                'team_id' => 10,
            ],
        ];

        foreach ($drivers as $driver) {
            Driver::create($driver);
        }
    }
}
