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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('short_description')->nullable();
            $table->string('title');
            $table->string('birthday');
            $table->string('website')->nullable();
            $table->string('phone');
            $table->string('city');
            $table->string('resume')->nullable();
            $table->string('degree');
            $table->string('email');
            $table->text('long_description');
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
        Schema::dropIfExists('abouts');
    }
};
