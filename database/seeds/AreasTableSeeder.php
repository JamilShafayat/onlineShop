<?php

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    public function run()
    {
        factory(Area::class, 5)->create();
    }
}
