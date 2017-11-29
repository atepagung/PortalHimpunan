<?php

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

$factory->define(App\University::class, function (Faker $faker) {
    
    return [
        'code' => $faker->unique()->buildingNumber,
        'name' => $faker->unique()->name,
        'location' => $faker->unique()->address,
        'town' => $faker->unique()->address,
    ];
});
