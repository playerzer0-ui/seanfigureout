<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IslandBuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Isle of Echoes (1)
            ['islandID' => 1, 'buildingID' => 1], // tavern
            ['islandID' => 1, 'buildingID' => 2], // lighthouse
            ['islandID' => 1, 'buildingID' => 3], // marketplace
            ['islandID' => 1, 'buildingID' => 4], // weather station
            ['islandID' => 1, 'buildingID' => 5], // shop
            ['islandID' => 1, 'buildingID' => 6], // museum

            // Verdant Shard (2)
            ['islandID' => 2, 'buildingID' => 3], // marketplace
            ['islandID' => 2, 'buildingID' => 5], // shop

            // Crystal Reef (3)
            ['islandID' => 3, 'buildingID' => 2], // lighthouse
            ['islandID' => 3, 'buildingID' => 4], // weather station

            // Scorchscale (4)
            ['islandID' => 4, 'buildingID' => 4], // weather station

            // Shadowhaven (5)
            ['islandID' => 5, 'buildingID' => 1], // tavern
            ['islandID' => 5, 'buildingID' => 6], // museum

            // Frostbite Island (6)
            ['islandID' => 6, 'buildingID' => 4], // weather station
            ['islandID' => 6, 'buildingID' => 2], // lighthouse

            // Whispering Shoal (7)
            ['islandID' => 7, 'buildingID' => 2], // lighthouse
            ['islandID' => 7, 'buildingID' => 3], // marketplace
        ];

        DB::table('islandBuildings')->insert($data);
    }
}
