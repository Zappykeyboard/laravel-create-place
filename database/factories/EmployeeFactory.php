<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname' => $faker-> firstName ,
      'lastname' => $faker-> lastName,
      'birthdate' => $faker-> date,
      'jobtitle' =>  $faker-> jobTitle,
      'salary' => rand(1000,5000)
    ];
});
