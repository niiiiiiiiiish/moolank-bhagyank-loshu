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
        Schema::create('loshu_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique(); // 1 to 9
            $table->string('data'); // Main message like "Prosperity, Humanity, Social Life, Fame"
            $table->string('element'); // Element like "Fire"
            $table->string('planet'); // Planet like "Mars"
            $table->string('merit'); // Merit like "Fame"
            $table->string('direction'); // Direction like "South"
            $table->timestamps(); // For created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loshu_numbers');
    }
};
