<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->sentence(),
        'featured_image' => Str::random(10),
    ];
});
