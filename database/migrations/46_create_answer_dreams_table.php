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
        Schema::create('answer_dreams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('question_dream');
            $table->unsignedBigInteger('option_answer');
            $table->timeStamps();

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('question_dream')->references('id')->on('question_dreams');
            $table->foreign('option_answer')->references('id')->on('option_answers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_dreams');
    }
};
