<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Food;

$factory->define(Food::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->sentence(),
        'featured_image' => Str::random(10),
    ];
});
