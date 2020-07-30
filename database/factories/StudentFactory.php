<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use App\Models\Group;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthday' => $faker->date(),
        'group_id'      => Group::all()->random()->id,
        'created_at'    => $faker->dateTimeBetween('-5 months','-1 days'),
        'updated_at'    => $faker->dateTime(),

    ];
});
