<?php

use Faker\Generator as Faker;

$factory->define(App\Post_Type::class, function (Faker $faker) {
	
    return [
        'title' => 'title'
    ];

});
