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
        Schema::create('JobPosition', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('EngTitle');
            $table->boolean('Used');
            $table->integer('Seq');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('JobPosition');
    }
};
