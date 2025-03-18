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
        Schema::create('travel_buddies', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name');
            $table->string('id_number'); // Changed from 'id' to avoid conflicts
            $table->string('gender', 7);
            $table->foreignId('booking_id')->constrained()->onDelete('cascade'); // Correct Foreign Key
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_buddies');
    }
};
