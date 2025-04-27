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
        Schema::create('reccomend_majors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('intelligence_type');
            $table->string('reccomend_major');
            $table->timeStamps();

            $table->foreign('intelligence_type')->references('id')->on('intelligence_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reccomend_majors');
    }
};
