<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Train::truncate();

        for ($i=0; $i < 20 ; $i++) { 

            $train = new Train();
            $train->company = fake()->company();
            $train->departure_station = fake()->streetName();  
            $train->arrival_station = fake()->streetName();  
            $train->Departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->train_type = fake()->randomElement(['intercity', 'regional', 'hyperfast']);
            $train->train_code = fake()->numberBetween(1, 999);
            $train->carriages_number = fake()->numberBetween(1, 12);
            $train->in_time = true;
            $train->deleted = false;
            $train->save();
        }
    }
}
