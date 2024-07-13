<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importo il metodo Generator a cui assefno alias Kaker
use Faker\Generator as Faker;

class TrainsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    // passiamo a run( un istanz di Faker)
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            //creo una nuova istanza classe Train
            $table = new Train();
            $table->agency = $faker->company();
            $table->departure_station = $faker->city();
            $table->arrival_station = $faker->city();
            $table->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $table->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $table->train_code = $faker->bothify('??###?');
            $table->number_of_carriages = $faker->numberBetween(5, 25);
            $table->in_time = $faker->boolean();
            $table->deleted = $faker->boolean();
            $table->save();
        }
    }
}
