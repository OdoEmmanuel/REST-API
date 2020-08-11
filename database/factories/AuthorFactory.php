<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'title' => $faker->jobTitle,
        'company' => $faker->company,
        'email' => $faker->unique()->companyEmail,
    ];
});
