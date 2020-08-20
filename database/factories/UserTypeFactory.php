<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\UserType;
use Faker\Generator as Faker;

$factory->define(UserType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
