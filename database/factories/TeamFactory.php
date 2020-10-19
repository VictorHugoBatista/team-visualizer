<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
