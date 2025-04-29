<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Event name field
            $table->string('slug')->unique(); // Slug field (should be unique)
            $table->string('venue');
            $table->date('date');
            $table->json('tickets')->nullable(); // To store ticket prices as JSON
            $table->string('event_image')->nullable(); // Can store the path/URL to image
            $table->string('intro_video')->nullable(); // Can store the path/URL to video
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};