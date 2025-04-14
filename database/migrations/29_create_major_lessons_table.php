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
        Schema::create('major_lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('major');
            $table->string('lesson');
            $table->timeStamps();

            $table->foreign('major')->references('id')->on('majors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('major_lessons');
    }
};
