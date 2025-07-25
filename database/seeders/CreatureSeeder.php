<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creatures
        $creatures = [
            [
                'creatureID' => 'creature-' . Str::uuid(),
                'creatureName' => 'small-fish-blackstorm.png',
                'creatureValue' => 5000,
                'rarityID' => 1, // make sure this rarityID exists in rarities table
            ],
            [
                'creatureID' => 'creature-' . Str::uuid(),
                'creatureName' => 'small-fish-bluefish.png',
                'creatureValue' => 7000,
                'rarityID' => 2,
            ],
            [
                'creatureID' => 'creature-' . Str::uuid(),
                'creatureName' => 'small-fish-btrfly.png',
                'creatureValue' => 4500,
                'rarityID' => 3,
            ],
        ];

        DB::table('creatures')->insert($creatures);
    }
}
