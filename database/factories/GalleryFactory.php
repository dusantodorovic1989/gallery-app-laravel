<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
            'title' => $faker->sentence($nvWords = 4, $variableNbWords = true),
            'description'=> $faker->text($maxNbChars = 200),
            'user_id' => function() {
                return App\User::all()->random()->id;
             },
        
    ];
});
