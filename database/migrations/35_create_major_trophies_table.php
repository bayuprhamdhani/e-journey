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
        Schema::create('major_trophies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('major');
            $table->unsignedBigInteger('type');
            $table->unsignedBigInteger('committee');
            $table->unsignedBigInteger('status');
            $table->date('date');
            $table->string('description');
            $table->string('link');
            $table->string('reward');
            $table->string('logo');
            $table->integer('fee');
            $table->integer('participant');
            $table->integer('score');
            $table->timeStamps();

            $table->foreign('major')->references('id')->on('majors');
            $table->foreign('type')->references('id')->on('type_trophies');
            $table->foreign('committee')->references('id')->on('committees');
            $table->foreign('status')->references('id')->on('status_trophies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('major_trophies');
    }
};
