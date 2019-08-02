<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Aula::class, function (Faker $faker) {
    return [
        'professor' => $faker->name,
        'materia' => $faker->word,
        'curso' => $faker->word,
        'codigo' => $faker->creditCardNumber,
        'instituto' => $faker->name
    ];
});
