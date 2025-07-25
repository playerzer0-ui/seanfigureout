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
            ['islandName' => 'Isle of Echoes',         'regionID' => 1],
            ['islandName' => 'Verdant Shard',          'regionID' => 2],
            ['islandName' => 'Crystal Reef',           'regionID' => 3],
            ['islandName' => 'Scorchscale',            'regionID' => 4],
            ['islandName' => 'Shadowhaven',            'regionID' => 5],
            ['islandName' => 'Frostbite Island',       'regionID' => 1],
            ['islandName' => 'Whispering Shoal',       'regionID' => 3],
        ]);
    }
}
