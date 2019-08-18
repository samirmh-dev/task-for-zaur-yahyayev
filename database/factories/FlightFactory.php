<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Flight;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'airline' => $faker->company,
        'plane' => $faker->company,
        'arrival_date' => $faker->dateTimeBetween('now', '+1 years', null),
        'arrival_time' => $faker->time,
        'price' => $faker->numberBetween(50, 400),
        'destination' => $faker->city,
        'departure' => $faker->city,
        'adult' => $faker->numberBetween(1, 100),
        'description' => $faker->realText(200)
    ];
});
            
