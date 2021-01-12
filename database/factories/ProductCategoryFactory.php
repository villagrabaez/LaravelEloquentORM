<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductCategory;
use Faker\Generator as Faker;

$factory->define(ProductCategory::class, function (Faker $faker) {
    return [
        'title'             => $faker->sentence(2),
        'slug'              => $faker->slug(2),
        'description'       => $faker->paragraph,
        'page_title'        => $faker->sentence,
        'meta_description'  => $faker->sentence,
        'featured'          => $faker->boolean,
        'image'             => sprintf('http://lorempixel.com/500/250/'),
    ];
});
