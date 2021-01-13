<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id'); // ->id()

            $table->string('title');
            $table->string('slug');
            // additional fields
            $table->mediumText('description');
            $table->string('page_title')->nullable();
            $table->string('meta_description');
            $table->boolean('featured')->default(false);
            $table->string('image');
            $table->enum('status', ['draft', 'pending', 'published']);

            $table->unsignedBigInteger('category_id'); // ->foreignId()

            $table->foreign('category_id')->references('id')->on('product_categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        $table->dropForeign(['category_id']);
    }
}
