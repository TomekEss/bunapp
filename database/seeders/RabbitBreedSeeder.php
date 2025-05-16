<?php

namespace Database\Seeders;

use App\Models\Breed;
use Illuminate\Database\Seeder;

class RabbitBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $breeds = [
            ['user_id' => 1, 'name' => 'Mieszaniec', 'default' => true],
            ['user_id' => 1, 'name' => 'Burgund', 'default' => true],
            ['user_id' => 1, 'name' => 'Wiedeński niebieski', 'default' => true],
            ['user_id' => 1, 'name' => 'Belgijski olbrzym', 'default' => true],
        ];

        foreach ($breeds as $breed) {
            Breed::create($breed);
        }
    }
}
