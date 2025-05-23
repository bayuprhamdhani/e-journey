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
        Schema::create('total_marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student');
            $table->integer('total_mark');
            $table->timeStamps();

            $table->foreign('student')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_marks');
    }
};
