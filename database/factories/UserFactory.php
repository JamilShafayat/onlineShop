<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\User;
use App\Models\UserType;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'user_name'         => 'admin',
        'email'             => 'admin@gmail.com',
        'password'          => bcrypt(12345),
        'email_verified_at' => Carbon::now(),
        'user_type_id'      => UserType::all()->random()->id,
    ];
});
