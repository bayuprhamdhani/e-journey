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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school');
            $table->unsignedBigInteger('type');
            $table->unsignedBigInteger('country');
            $table->unsignedBigInteger('province');
            $table->unsignedBigInteger('city');
            $table->timeStamps();

            $table->foreign('country')->references('id')->on('countries');
            $table->foreign('province')->references('id')->on('provinces');
            $table->foreign('city')->references('id')->on('cities');
            $table->foreign('type')->references('id')->on('type_schools');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
