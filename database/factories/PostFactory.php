<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text,
        'image'=>'post/image/pack.jpg',
        'category_id'=>\App\Category::all()->random(),
        'user_id'=>\App\User::all()->random()
    ];
});
