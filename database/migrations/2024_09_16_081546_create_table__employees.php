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
        Schema::create('Employees', function (Blueprint $table) {
            $table->string('Account');
            $table->string('Name');
            $table->string('Password');
            $table->string('email');
            $table->date('BirthDay');
            $table->string('CityID');
            $table->string('CityAreaID');
            $table->string('CityStreetID');
            $table->string('Address');
            $table->date('StartDate');
            $table->date('EndDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Employees');
    }
};
