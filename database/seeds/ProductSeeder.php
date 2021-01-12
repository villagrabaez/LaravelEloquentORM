<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ProductCategory::pluck('id');

        foreach ( $categories as $categoryId ) {
            factory(Product::class)->times( rand(12, 28) )->create([
                'category_id' => $categoryId,
            ]);
        }
    }
}
