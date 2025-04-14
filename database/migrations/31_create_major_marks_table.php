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
        Schema::create('major_marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student');
            $table->unsignedBigInteger('major_lesson');
            $table->integer('daily_mark');
            $table->integer('exam_mark');
            $table->timeStamps();

            $table->foreign('student')->references('id')->on('students');
            $table->foreign('major_lesson')->references('id')->on('general_lessons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('major_marks');
    }
};
