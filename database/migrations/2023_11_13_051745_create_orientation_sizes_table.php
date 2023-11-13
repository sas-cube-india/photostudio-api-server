<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orientation_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orientation_id')->constrained();
            $table->integer('height');
            $table->integer('width');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orientation_sizes');
    }
};
