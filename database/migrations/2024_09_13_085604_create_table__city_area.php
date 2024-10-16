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
        Schema::create('cityareas', function (Blueprint $table) {
            $table->id();
            $table->string('postalCode');
            $table->string('cityID');
            $table->string('name');
            $table->boolean('used')->default(true);
            $table->integer('seq');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cityareas');
    }
};
