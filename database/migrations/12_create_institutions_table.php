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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type');
            $table->string('school');
            $table->string('npsn')->unique();
            $table->unsignedBigInteger('country');
            $table->unsignedBigInteger('province');
            $table->unsignedBigInteger('city');
            $table->string('logo');
            $table->string('contact');
            $table->integer('score');
            $table->timeStamps();

            $table->foreign('type')->references('id')->on('type_schools');
            $table->foreign('country')->references('id')->on('countries');
            $table->foreign('province')->references('id')->on('provinces');
            $table->foreign('city')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
