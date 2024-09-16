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
        Schema::create('SignState', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('SignCode');
            $table->boolean('Used');
            $table->integer('Seq');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SignState');
    }
};
