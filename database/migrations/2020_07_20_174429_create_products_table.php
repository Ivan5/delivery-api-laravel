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
            $table->increments('id');
            $table->string('slug',50)->unique();
            $table->string('title',67);
            $table->string('description',155);
            $table->string('name',50)->unique();
            $table->decimal('price',7,2);
            $table->string('unit',15);
            $table->integer('stock');
            $table->boolean('status')->default(0);

            $table->string('imageUrl')->default('foto.jpg');
            $table->integer('order')->default(0);

            $table->integer('subcategories_id')->unsigned();
            $table->foreign('subcategories_id')->references('id')->on('subcategories');
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
    }
}
