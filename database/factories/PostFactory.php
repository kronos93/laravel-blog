<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        //
        'user_id' =>  function() { return App\User::all()->random(); },//function() { return User::all()->random(); },
        'category_id' => function() { return App\Category::all()->random(); },
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(120),
        'body' => $faker->text(500),
        'file' => $faker->imageUrl($width=1200,$height = 400),
        'status' => $faker->randomElement(['DRAFT','PUBLISHED']),
    ];
});
