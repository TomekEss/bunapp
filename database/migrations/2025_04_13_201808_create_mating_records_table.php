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
        Schema::create('mating_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('male_id')->constrained('rabbits');
            $table->foreignId('female_id')->constrained('rabbits');
            $table->date('mating_date');
            $table->tinyInteger('type');
            $table->string('note', 255)->nullable();
            $table->tinyInteger('number_of_knockdown');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mating_records');
    }
};
