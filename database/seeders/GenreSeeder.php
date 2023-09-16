<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['value' => 'Ужасы'],
            ['value' => 'Драма'],
            ['value' => 'Романтика'],
            ['value' => 'Мелодрама'],
            ['value' => 'Фантастика']
        ];

        DB::table('genres')->insert($genres);
    }
}
