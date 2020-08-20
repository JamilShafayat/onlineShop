<?php

use App\Models\Area;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(AreasTableSeeder::class);
        $this->call(UserTypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
