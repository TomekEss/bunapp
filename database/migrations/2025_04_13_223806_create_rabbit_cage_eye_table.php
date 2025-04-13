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
        Schema::create('rabbit_cage_eye', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rabbit_id')->constrained('rabbits');
            $table->foreignId('cage_eye_id')->constrained('cage_eyes');
            $table->date('date_of_residence')->nullable();
            $table->date('moving_out')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rabbit_cage_eye');
    }
};
