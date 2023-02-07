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
            $table->id();
            $table->string('name',50);
            $table->text('description');
            $table->string('benefit',255);
            $table->unsignedBigInteger('price');
            $table->unsignedInteger('quantity');
            $table->string('path');
            $table->string('file_name');
            $table->unsignedBigInteger('manufacturers_id');
            $table->foreign('manufacturers_id')->references('id')->on('manufacturers');
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
