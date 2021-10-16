<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        "title" => $faker->company(),
        "description" =>$faker->sentence(3),
        "company_id" =>rand(1,15)
    ];
});
