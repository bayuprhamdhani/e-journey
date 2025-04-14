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
        Schema::create('subdistricts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city');
            $table->string('subdistrict');
            $table->timeStamps();

            $table->foreign('city')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subdistricts');
    }
};
