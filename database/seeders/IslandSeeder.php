<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IslandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('islands')->insert([
            ['islandName' => 'Isle of Echoes',  'distance' => 120,   'regionID' => 1],
            ['islandName' => 'Verdant Shard',  'distance' => 20,    'regionID' => 2],
            ['islandName' => 'Crystal Reef',  'distance' => 100,    'regionID' => 3],
            ['islandName' => 'Scorchscale', 'distance' => 80,     'regionID' => 4],
            ['islandName' => 'Shadowhaven',  'distance' => 200,      'regionID' => 5],
            ['islandName' => 'Frostbite Island', 'distance' => 170,       'regionID' => 1],
            ['islandName' => 'Whispering Shoal', 'distance' => 230,      'regionID' => 3],
        ]);
    }
}
