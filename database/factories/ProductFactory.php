<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'title' => $faker->text(100),
        'brought_price' => random_int(100, 100),
        'sale_price' => random_int(100, 100),
        'description' => $faker->realText(),
        'quantity' => 20,
        'unit' => $faker->name,
    ];
});
