<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        
        for($i = 0; $i < 100; $i++) {
            
            $new_train = new Train();

            $new_train->agency = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeThisYear();
            $new_train->arrival_time = $faker->dateTimeThisYear();
            $new_train->train_code = $faker->randomNumber(6, true);
            $new_train->train_carriage = $faker->numberBetween(5, 30);
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->cancelled = $faker->numberBetween(0, 1);

            $new_train->save();
        }
    }
}
