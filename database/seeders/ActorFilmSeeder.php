<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actorsfilms =
            [
                ['actor_id' => 1, 'film_id' => 7],
                ['actor_id' => 1, 'film_id' => 8],
                ['actor_id' => 2, 'film_id' => 9],
                ['actor_id' => 3, 'film_id' => 7],
                ['actor_id' => 2, 'film_id' => 8],
        ];

        DB::table('actors_films')->insert($actorsfilms);
    }
}
