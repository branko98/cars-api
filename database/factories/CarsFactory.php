<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Car;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->realText(10),
        'model' => $faker->realText(10),
        'year' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'maxSpeed' => $faker->numberBetween($min = 120, $max = 250),
        'isAutomatic' => $faker->boolean($chanceOfGettingTrue = 50),
        'engine' => $faker->randomElement($array = array ('Diesel','Petrol','Electric', 'Hybrid')),
        'numberOfDoors' => $faker->randomElement($array = array (3,5,7)),
    ];
});
