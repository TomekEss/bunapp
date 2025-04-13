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
        Schema::create('cage_eye_cleans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cage_eye_id')->constrained('cage_eyes');
            $table->date('clean_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cage_eye_cleans');
    }
};
