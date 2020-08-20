<?php

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Plank\Mediable\Mediable;

class ProductsTableSeeder extends Seeder
{
    use Mediable;
    public function run()
    {
        $faker = New Faker();
        factory(Product::class, 10)->create();

        $products = Product::select('id')->get();

        foreach ($products as $product) {
            $product->loadMedia();
        }
    }
}
