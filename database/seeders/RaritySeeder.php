<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rarities')->insert([
            [
                'rarityID' => 1,
                'rarityName' => 'common',
                'rarityValue' => 1,
            ],
            [
                'rarityID' => 2,
                'rarityName' => 'uncommon',
                'rarityValue' => 2,
            ],
            [
                'rarityID' => 3,
                'rarityName' => 'rare',
                'rarityValue' => 3,
            ],
            [
                'rarityID' => 4,
                'rarityName' => 'epic',
                'rarityValue' => 4,
            ],
            [
                'rarityID' => 5,
                'rarityName' => 'legendary',
                'rarityValue' => 5,
            ]
        ]);
    }
}
