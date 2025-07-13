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
        Schema::create('rabbit_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rabbit_id')->constrained('rabbits');
            $table->decimal('weight_kg', 5, 2)->nullable()->comment('Rabbit weight [kg]');
            $table->string('tattoo_number', 20)->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('color', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rabbit_details');
    }
};
