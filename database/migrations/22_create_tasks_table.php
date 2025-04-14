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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->integer('score');
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('semester');
            $table->unsignedBigInteger('month');
            $table->unsignedBigInteger('week');
            $table->timeStamps();

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('semester')->references('id')->on('semesters');
            $table->foreign('month')->references('id')->on('months');
            $table->foreign('week')->references('id')->on('weeks');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
