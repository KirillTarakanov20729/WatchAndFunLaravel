<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['value' => 'Франция'],
            ['value' => 'Германия'],
            ['value' => 'Россия'],
            ['value' => 'Англия'],
            ['value' => 'Япония']
        ];

        DB::table('countries')->insert($countries);
    }
}
