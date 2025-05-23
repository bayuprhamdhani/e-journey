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
        Schema::create('type_schools', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('country');
            $table->timeStamps();
        
            $table->foreign('country')->references('id')->on('countries');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_schools');
    }
};
