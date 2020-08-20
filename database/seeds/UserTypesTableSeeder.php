<?php

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    public function run()
    {
        factory(UserType::class, 4)->create();
    }
}
