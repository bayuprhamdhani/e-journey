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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nis')->unique();
            $table->integer('graduate');
            $table->string('contact');
            $table->string('pict');
            $table->string('dream')->nullable();
            $table->unsignedBigInteger('country');
            $table->unsignedBigInteger('province');
            $table->unsignedBigInteger('city');
            $table->unsignedBigInteger('subdistrict');
            $table->unsignedBigInteger('type_school')->nullable();
            $table->unsignedBigInteger('major');
            $table->unsignedBigInteger('class')->nullable();
            $table->integer('score')->nullable();
            $table->timeStamps();

            $table->foreign('country')->references('id')->on('countries');
            $table->foreign('province')->references('id')->on('provinces');
            $table->foreign('city')->references('id')->on('cities');
            $table->foreign('subdistrict')->references('id')->on('subdistricts');
            $table->foreign('type_school')->references('id')->on('type_schools');
            $table->foreign('major')->references('id')->on('majors');
            $table->foreign('class')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
