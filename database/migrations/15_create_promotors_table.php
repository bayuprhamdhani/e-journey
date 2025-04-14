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
        Schema::create('promotors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->unsignedBigInteger('country');
            $table->unsignedBigInteger('province');
            $table->unsignedBigInteger('city');
            $table->unsignedBigInteger('subdistrict');
            $table->timeStamps();

            $table->foreign('country')->references('id')->on('countries');
            $table->foreign('province')->references('id')->on('provinces');
            $table->foreign('city')->references('id')->on('cities');
            $table->foreign('subdistrict')->references('id')->on('subdistricts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotors');
    }
};
