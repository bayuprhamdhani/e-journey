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
        Schema::create('general_lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country');
            $table->string('lesson');
            $table->timeStamps();

            $table->foreign('country')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_lessons');
    }
};
