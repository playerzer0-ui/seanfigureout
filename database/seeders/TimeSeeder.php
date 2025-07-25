<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //times
        $times = ['06:00:00', '12:00:00', '18:00:00', '00:00:00'];
        $dayTypes = ['weekday', 'weekend', 'holiday'];
        $monthRanges = ['spring', 'summer', 'autumn', 'winter'];

        $timeID = 1; // Starting ID for times
        $data = [];

        foreach ($times as $time) {
            foreach ($dayTypes as $dayType) {
                foreach ($monthRanges as $monthRange) {
                    $data[] = [
                        'timeID' => $timeID++,
                        'time' => $time,
                        'dayType' => $dayType,
                        'monthRange' => $monthRange
                    ];
                }
            }
        }

        DB::table('times')->insert($data);
    }
}
