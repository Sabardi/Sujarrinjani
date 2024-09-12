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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Ini adalah kolom auto_increment dan primary key
            $table->foreignId('tours_id')->constrained('tours');
            $table->string('kode_booking');
            $table->string('fullName', 45);
            $table->string('email', 45);
            $table->string('pasport_number', 45);
            $table->string('nationality', 45);
            $table->integer('total_participan'); // Tidak perlu auto_increment di sini
            $table->date('arrival_date');
            $table->time('pickup_time');
            $table->string('pickup_location', 45);
            $table->text('add_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
