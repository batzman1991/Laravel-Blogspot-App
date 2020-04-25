<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 3, $asText = true),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
