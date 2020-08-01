<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Subject;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'name'          =>  $faker->name,
        'created_at'    =>  $faker->dateTimeBetween('-5 months','-1 days'),
        'updated_at'    =>  $faker->dateTime()
    ];
});
