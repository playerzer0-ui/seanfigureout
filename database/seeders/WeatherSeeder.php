<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weathers')->insert([
            [
                'weatherID' => 1,
                'weatherName' => 'Sunny'
            ],
            [
                'weatherID' => 2,
                'weatherName' => 'Rainy'
            ],
            [
                'weatherID' => 3,
                'weatherName' => 'Stormy'
            ],
            [
                'weatherID' => 4,
                'weatherName' => 'Foggy'
            ],
            [
                'weatherID' => 5,
                'weatherName' => 'Frenzy'
            ], // special / fantasy effect maybe?
        ]);
    }
}
