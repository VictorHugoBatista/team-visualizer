<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AdminUsers;
use Faker\Generator as Faker;

$factory->define(AdminUsers::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => $faker->password,
        'remember_token' => $faker->md5,
        'activated' => 1,
        'forbidden' => 0,
        'language' => 'en',
        'deleted_at' => NULL,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
