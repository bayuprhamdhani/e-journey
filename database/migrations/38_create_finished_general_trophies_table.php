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
        Schema::create('finished_general_trophies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('trophy');
            $table->string('pict')->nullable();
            $table->unsignedBigInteger('status');
            $table->timeStamps();

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('trophy')->references('id')->on('general_trophies');
            $table->foreign('status')->references('id')->on('status_finish');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finished_general_trophies');
    }
};
