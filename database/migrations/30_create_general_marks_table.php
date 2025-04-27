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
        Schema::create('general_marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student');
            $table->unsignedBigInteger('general_lesson');
            $table->unsignedBigInteger('semester');
            $table->integer('daily_mark');
            $table->integer('exam_mark');
            $table->timeStamps();

            $table->foreign('student')->references('id')->on('students');
            $table->foreign('semester')->references('id')->on('semesters');
            $table->foreign('general_lesson')->references('id')->on('general_lessons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_marks');
    }
};
