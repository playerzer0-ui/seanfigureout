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
                'buildingName' => 'tavern'
            ],
            [
                'buildingID' => 2,
                'buildingName' => 'lighthouse'
            ],
            [
                'buildingID' => 3,
                'buildingName' => 'marketplace'
            ],
            [
                'buildingID' => 4,
                'buildingName' => 'weather station'
            ],
            [
                'buildingID' => 5,
                'buildingName' => 'shop'
            ],
            [
                'buildingID' => 6,
                'buildingName' => 'museum'
            ],
        ]);
    }
}
