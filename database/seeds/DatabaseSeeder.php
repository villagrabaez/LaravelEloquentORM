<?php

use Illuminate\Database\Seeder;
use App\{ProductCategory, Product};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
