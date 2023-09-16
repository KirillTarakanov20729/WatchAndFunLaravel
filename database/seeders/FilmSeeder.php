<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'value' => 'Побег из Шоушенка',
                'description' => 'Some text',
                'duration' => '01:58',
                'image' => 'images/Pobeg.jpeg',
                'genre_id' => 11,
                'country_id' => 2,
                'director_id' => 1,
            ],
            [
                'value' => 'Однажны в Голливуде',
                'description' => 'Some text',
                'duration' => '02:21',
                'image' => 'images/Hollywood.jpeg',
                'genre_id' => 13,
                'country_id' => 2,
                'director_id' => 3,
            ],
            [
                'value' => 'Титаник',
                'description' => 'Some text',
                'duration' => '02:15',
                'image' => 'images/Titanik.jpeg',
                'genre_id' => 15,
                'country_id' => 1,
                'director_id' => 3,
            ],
        ];

        DB::table('films')->insert($films);
    }
}
