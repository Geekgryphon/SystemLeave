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
        Schema::create('LeaveApprovalStages', function (Blueprint $table) {
            $table->string('LeaveFormNo');
            $table->string('Account');
            $table->integer('Step');
            $table->string('Status');
            $table->string('Memo');
            $table->datetime('SignTime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LeaveApprovalStages');
    }
};
