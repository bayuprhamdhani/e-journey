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
        Schema::create('advices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->string('advice');
            $table->date('date');
            $table->unsignedBigInteger('status');
            $table->timeStamps();

            $table->foreign('status')->references('id')->on('status_advices');
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advices');
    }
};
