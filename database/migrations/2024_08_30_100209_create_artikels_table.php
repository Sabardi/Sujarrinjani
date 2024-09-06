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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tours_id')->constrained('tours');
            $table->string('quote');
            $table->string('itinerary');
            $table->string('day1_image');
            $table->string('paragrap1_day1');
            $table->string('paragrap2_day1')->nullable();
            $table->string('day2_image')->nullable();
            $table->string('paragrap1_day2')->nullable();
            $table->string('paragrap2_day2')->nullable();
            $table->string('day3_image')->nullable();
            $table->string('paragrap1_day3')->nullable();
            $table->string('paragrap2_day3')->nullable();
            $table->string('day4_image')->nullable();
            $table->string('paragrap1_day4')->nullable();
            $table->string('paragrap2_day4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
