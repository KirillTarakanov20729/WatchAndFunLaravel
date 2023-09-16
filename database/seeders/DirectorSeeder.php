<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directors = [
            ['value' => 'Захаров Карен'],
            ['value' => 'Быков Юрий'],
            ['value' => 'Тарантино Квентин'],
            ['value' => 'Ричи Гай'],
            ['value' => 'Спилберг Стивен']
        ];

        DB::table('directors')->insert($directors);
    }
}
