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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignId('director_id')->constrained('directors');
            $table->foreignId('genre_id')->constrained('genres');
            $table->timestamps();
        });

        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->timestamps();
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
        Schema::dropIfExists('directors');
        Schema::dropIfExists('genres');
    }
};
