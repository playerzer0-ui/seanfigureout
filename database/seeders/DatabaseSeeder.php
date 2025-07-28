<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MasterSeed::class,
            RaritySeeder::class,
            RegionSeeder::class,
            IslandSeeder::class,
            BuildingSeeder::class,
            IslandBuildingSeeder::class,
            TimeSeeder::class,
            WeatherSeeder::class,
            CreatureSeeder::class,
            SpawnLocationSeeder::class,
            SpawnTimeSeeder::class,
        ]);
    }
}
