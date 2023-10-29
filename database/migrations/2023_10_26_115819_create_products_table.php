<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('size')->nullable();
            $table->enum('product_orientation',['Square','Landscape','Portrait',])->nullable();
            $table->unsignedBigInteger('thermal_sheet')->nullable();
            $table->unsignedBigInteger('white_sheet')->nullable();
            $table->unsignedBigInteger('black_sheet')->nullable();
            $table->unsignedBigInteger('image_wrap')->nullable();
            $table->unsignedBigInteger('leather')->nullable();
            $table->unsignedBigInteger('photo')->nullable();
            $table->unsignedBigInteger('acrylic_cameo')->nullable();
            $table->unsignedBigInteger('canvas')->nullable();
            $table->unsignedBigInteger('leather_box')->nullable();
            $table->unsignedBigInteger('photo_box')->nullable();
            $table->unsignedBigInteger('linen_box')->nullable();
            $table->unsignedBigInteger('leather_sleeve')->nullable();
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
};








