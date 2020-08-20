<?php

use App\Model;
use App\Models\Area;
use Faker\Generator as Faker;

$factory->define(Area::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'postcode'  => 1230,
    ];
});
