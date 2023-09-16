<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actors = [
            ['value' => 'Прилучный Павел'],
            ['value' => 'Хэнкс Том'],
            ['value' => 'Харди Том'],
            ['value' => 'Хабенский Константин'],
            ['value' => 'Феникс Хоакин']
        ];

        DB::table('actors')->insert($actors);
    }
}
