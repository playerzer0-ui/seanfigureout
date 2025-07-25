<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasterSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        DB::table('users')->insert([
            [
                'userID' => '37d72912-5ad0-11ef-b5d1-5cbaef99b658',
                'username' => 'jerry',
                'email' => 'jerikuland@gmail.com',
                'password' => '$2y$10$I6HDp20xfQ.eyexX6Xu0XOmiCwmPmVGf7WuNTF6LApGFg0kxVcbIG',
            ],
            [
                'userID' => '3de53767-5ad0-11ef-b5d1-5cbaef99b658',
                'username' => 'bob',
                'email' => 'cydacnote@gmail.com',
                'password' => '$2y$10$I6HDp20xfQ.eyexX6Xu0XOmiCwmPmVGf7WuNTF6LApGFg0kxVcbIG',
            ],
        ]);


    }
}
