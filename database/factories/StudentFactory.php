<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'dob' => $faker->dateTimeBetween('1999-01-01', '2017-12-31')->format('Y/m/d'),
        'email' => $faker->unique()->safeEmail,
        'school' => rand(0,1),
    ];
});
