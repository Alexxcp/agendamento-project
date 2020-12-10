<?php

use Faker\Generator as Faker;

$factory->define(App\Paciente::class, function (Faker $faker) {
    return [
        'saudacao' => 'Sr.',
        'nome' => $faker->name,
        'telefone' => $faker->cellphoneNumber,
        'data_nascimento' => $faker->date('d-m-Y'),
        'altura' => $faker->numberBetween(0.50, 2.20),
        'peso' => $faker->numberBetween(0.400, 250.00),
        'email' => $faker->unique()->safeEmail,
        'nota' => 'Usuário criado aleatoriamente.'
    ];
});