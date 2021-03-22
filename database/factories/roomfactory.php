<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\room;
use Faker\Generator as Faker;

$factory->define(room::class, function (Faker $faker) {
    return [
        'num_beds' => $faker->number_format,
        'rooms_nums' =>$faker->number_format,
        'max_num_hosts' =>$faker->sentence(1), // password
        'price' =>$faker->sentence(1),
        'admin_id' => factory(App\User::class),
        'type_id' => factory(App\User::class)
    ];
});
