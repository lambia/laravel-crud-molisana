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
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description')->nullable();
            $table->string('type', 20);
            $table->string('image');
            $table->string('cooking_time', 20);
            $table->string('weight', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pastas');
    }
};
