<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'user' => User::all(['id'])->random(),
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ];
});
