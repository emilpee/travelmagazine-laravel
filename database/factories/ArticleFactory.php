<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [     
        'category_id' => $faker->numberBetween($min = 1, $max = 7),
        'prio' => $faker->numberBetween($min = 2, $max = 3),
        'img_url' => $faker->imageUrl($width = 640, $height = 480),
        'author' => $faker->name(),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'lead' => $faker->text($maxNbChars = 100),
        'bodytext' => $faker->paragraph($nbSentences = 100, $variableNbSentences = true),
        'created_at'=> $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-2 years', $timezone = null),
        'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null)
    ];
});
