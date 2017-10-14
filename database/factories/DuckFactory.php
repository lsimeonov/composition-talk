<?php

use Faker\Generator as Faker;


$factory->define(App\Model\Duck::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'fly' => $faker->randomElement(['rocket', 'wings', null]),
        'quack' => $faker->randomElement(['mute', 'duck_call', 'quack']),
    ];
});