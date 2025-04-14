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
        Schema::create('score_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->integer('score_task');
            $table->timeStamps();

            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score_tasks');
    }
};
