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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
       	'address' => 'Hà Nội',
       	'phone' => mt_rand(1, 1000000000),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
	
    return [
        'title' => $faker->name,
        'description' => $faker->word,
        'content' => $faker->paragraph,
        'status_id' => mt_rand(1, 2),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->name,
        'status_id' => mt_rand(1, 2),
    ];
});
