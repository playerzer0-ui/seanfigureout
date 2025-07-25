<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['regionID' => 1, 'regionName' => 'Northern Highlands'],
            ['regionID' => 2, 'regionName' => 'Mystic Forest'],
            ['regionID' => 3, 'regionName' => 'Crystal Coast'],
            ['regionID' => 4, 'regionName' => 'Ashen Desert'],
            ['regionID' => 5, 'regionName' => 'Forgotten Isles'],
        ]);
    }
}
