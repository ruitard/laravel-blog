<?php

use Faker\Generator as Faker;
use App\Models\Tag;

$factory->define(Tag::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'tag' => $word,
        'meta_description' => "Meta for $word",
    ];
});
