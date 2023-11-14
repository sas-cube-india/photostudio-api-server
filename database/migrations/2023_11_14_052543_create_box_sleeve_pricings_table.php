<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('box_sleeve_pricings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('box_sleeve_id')->constrained();
            $table->foreignId('orientation_size_id')->constrained();
            $table->decimal('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('box_sleeve_pricings');
    }
};
