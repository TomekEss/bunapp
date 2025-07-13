<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RabbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rabbits')->insert([
            [
                'name' => 'Balbina',
                'gender' => 2,
                'user_id' => 1,
                'breed_id' => 1,
                'birthday' => '2022-11-10'
            ],
            [
                'name' => 'Donald',
                'gender' => 1,
                'user_id' => 1,
                'breed_id' => 2,
                'birthday' => '2023-02-01'
            ],
            [
                'name' => 'Jola',
                'gender' => 1,
                'user_id' => 1,
                'breed_id' => 2,
                'birthday' => '2024-04-01'
            ],
        ]);
    }
}
