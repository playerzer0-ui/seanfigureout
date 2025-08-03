<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
            [
                'buildingID' => 1,
                'buildingName' => 'buildings-tavern.png'
            ],
            [
                'buildingID' => 2,
                'buildingName' => 'buildings-lighthouse.png'
            ],
            [
                'buildingID' => 3,
                'buildingName' => 'buildings-marketplace.png'
            ],
            [
                'buildingID' => 4,
                'buildingName' => 'buildings-weather-station.png'
            ],
            [
                'buildingID' => 5,
                'buildingName' => 'buildings-shop.png'
            ],
            [
                'buildingID' => 6,
                'buildingName' => 'buildings-museum.png'
            ],
        ]);
    }
}
