<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Robot::class, function (Faker $faker) {

    return [
        'model' => $faker->words(2, true),
        'clean' => $faker->randomElement(['quick', 'slow']),
        'quack' => $faker->randomElement(['mute', 'duck_call', 'quack']),
    ];
});