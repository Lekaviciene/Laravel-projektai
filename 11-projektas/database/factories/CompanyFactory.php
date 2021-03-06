<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        "title" => $faker->company(),
        "description" =>$faker->word(5),
        "logo" => $faker->imageUrl(100, 100, 'animals', true),

    ];
});
