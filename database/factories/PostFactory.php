<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' =>$faker->numberBetween($min = 1, $max = 5),
        'category_id' =>$faker->numberBetween($min = 1, $max = 10),
        'description'=>$faker->realText(50)
    ];
});
