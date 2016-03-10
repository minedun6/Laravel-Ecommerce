<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function ($faker) {
    return [
        'name' => $faker->word()
    ];
});

$factory->define(App\Product::class, function ($faker) {
    return [
        'title' => $faker->sentence(2, true),
        'code' => 'PROD' . $faker->ean8,
        'price' => $faker->randomFloat(NULL, 0, 2000),
        'description' => $faker->paragraph(),
        'qty' => $faker->numberBetween(10, 500),
        'img' => $faker->imageUrl(350, 260, 'technics'),
        'category_id' => array_rand(\App\Category::pluck('name', 'id')->toArray(), 1)
    ];
});

