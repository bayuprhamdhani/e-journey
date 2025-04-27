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
        Schema::create('question_dreams', function (Blueprint $table) {
            $table->id();
            $table->string('question_dream');
            $table->unsignedBigInteger('intelligence_type');
            $table->timeStamps();

            $table->foreign('intelligence_type')->references('id')->on('intelligence_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_dreams');
    }
};
