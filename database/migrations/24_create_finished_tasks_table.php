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
        Schema::create('finished_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task');
            $table->string('pict');
            $table->timeStamps();

            $table->foreign('task')->references('id')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finished_tasks');
    }
};
