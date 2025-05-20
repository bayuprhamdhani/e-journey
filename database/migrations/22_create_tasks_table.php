<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('semester')->references('id')->on('semesters');
            $table->foreign('month')->references('id')->on('months');
            $table->foreign('week')->references('id')->on('weeks');

            // Tambahkan ini agar satu user tidak bisa punya dua task dengan nama yang sama
            $table->unique(['user', 'task', 'semester', 'month', 'week']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
