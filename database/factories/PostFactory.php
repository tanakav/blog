<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'user_id' => User::all(['id'])->random(),
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ];
});
