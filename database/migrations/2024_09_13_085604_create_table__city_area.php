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
        Schema::create('table__city_area', function (Blueprint $table) {
            $table->id();
            $table->string('PostalCode');
            $table->string('CityID');
            $table->string('Name');
            $table->boolean('Used')->default(true);
            $table->integer('Seq');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__city_area');
    }
};
