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
        Schema::create('costomers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("phone_no");
            $table->text("email");
            $table->text("password");
            $table->text("compunys_name");
            $table->text("compunys_logo");
            $table->text("social_link")->nullable();
            $table->text("address")->nullable();
            $table->string("state")->nullable();
            $table->string("country")->nullable();
            $table->boolean("email_veryfi")->default(false);
            $table->boolean("phone_veryfi")->default(false);
            $table->boolean("status")->default(false);
            $table->enum("pricing_formate", ['us', 'ind'])->nullable();
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
        Schema::dropIfExists('costomers');
    }
};
