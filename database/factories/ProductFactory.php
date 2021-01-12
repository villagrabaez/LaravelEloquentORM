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
    ];
});
