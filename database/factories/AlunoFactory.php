<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'matricula' => $faker->creditCardNumber,
        'curso' => $faker->word,
        'idade' => $faker->numberBetween($min = 18, $max=60)
    ];
});
