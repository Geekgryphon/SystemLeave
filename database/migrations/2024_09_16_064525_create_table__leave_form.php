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
        Schema::create('LeaveForm', function (Blueprint $table) {
            $table->id();
            $table->string('LeaveFormNo');
            $table->string('LeaveKindID');
            $table->string('LeaveFormReason');
            $table->string('Applicant');
            $table->string('Proxy');
            $table->datetime('BeginTime');
            $table->datetime('EndTime');
            $table->datetime('create_at');
            $table->string('AttatchmentName1');
            $table->string('AttatchmentName2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LeaveForm');
    }
};
