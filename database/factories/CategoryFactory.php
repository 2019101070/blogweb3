<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $category_desc = $faker->realText(20);
     $desc = strtoupper($category_desc);
    return [
        'description'=>$desc
    ];
});
