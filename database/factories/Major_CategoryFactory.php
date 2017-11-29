<?php

use Faker\Generator as Faker;

$factory->define(App\Major_Category::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->name,
    ];
});
