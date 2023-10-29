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
        Schema::create('costomerrequists', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("phone_no");
            $table->text("email");
            $table->text("password");
            $table->text("state")->nullable();
            $table->text("country")->nullable();
            $table->text("address")->nullable();
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
        Schema::dropIfExists('costomerrequists');
    }
};
