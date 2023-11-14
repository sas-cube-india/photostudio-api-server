<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cover_pricings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orientation_id')->constrained();
            $table->foreignId('orientation_size_id')->constrained();
            $table->foreignId('cover_id')->constrained();
            $table->decimal('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cover_pricings');
    }
};
