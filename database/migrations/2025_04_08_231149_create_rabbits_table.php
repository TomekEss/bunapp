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
        Schema::create('rabbits', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedTinyInteger('gender')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('mother_id')->nullable()->constrained('rabbits');
            $table->foreignId('father_id')->nullable()->constrained('rabbits');
            $table->foreignId('breed_id')->nullable()->constrained('breeds');
            $table->date('birthday')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rabbits');
    }
};
