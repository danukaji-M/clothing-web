<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->timestamps();
        });
        Schema::create('brand', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->timestamps();
        });
        Schema::create('product',  function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_price');
            $table->integer('product_quantity');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('brand_id')->references('id')->on('brand');
        });
        SChema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('product_image');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('product');
        });
        Schema::create('product_click_count', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->integer('click_count');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('product');
        });
        Schema::create('brnad_click_count', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->integer('click_count');
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brand');
        });
        Schema::create('category_click_count', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->integer('click_count');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
        Schema::dropIfExists('brand');
        Schema::dropIfExists('product');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('product_click_count');
        Schema::dropIfExists('brand_click_count');
        Schema::dropIfExists('category_click_count');
    }
};