<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\ProductCategory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'slug'  => $faker->slug(4),
        'category_id' => factory(ProductCategory::class),
        'description'       => $faker->paragraph,
        'page_title'        => $faker->sentence,
        'meta_description'  => $faker->sentence,
        'featured'          => $faker->boolean,
        'image'             => sprintf('http://lorempixel.com/500/250/'),
        'status'            => $faker->randomElement(['draft', 'pending', 'published'])
    ];
});
