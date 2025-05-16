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
        Schema::create('general_lesson_intelligence_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson');
            $table->unsignedBigInteger('intelligence');
            $table->timestamps();

            $table->foreign('lesson')->references('id')->on('general_lessons')->onDelete('cascade');
            $table->foreign('intelligence')->references('id')->on('intelligence_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_lesson_intelligence_type');
    }
};
