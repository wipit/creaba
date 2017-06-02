<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(creaBuenosAires\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'sexo' => $faker->randomElement($array = ["F","M"]),
        'dni' => $faker->randomNumber(8),
        'nivel_estudios' => $faker->numberBetween(1,4),
        'titulo' => $faker->numberBetween(1,25),
        'imagen' => $faker->imageUrl($width = 640, $height = 480),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});

$factory->define(creaBuenosAires\Titulo::class, function (Faker\Generator $faker) {
    return [
        'diploma' => $faker->sentence(3)
    ];
});

$factory->define(creaBuenosAires\Interes::class, function (Faker\Generator $faker) {
    return [
        'interes' => $faker->words(2,true)
    ];
});