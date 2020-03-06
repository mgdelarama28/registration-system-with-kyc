<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sample;
use Faker\Generator as Faker;

$factory->define(Sample::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'image_path' => null,
        'description' => $faker->text($maxNbChars = 100),
    ];
});
