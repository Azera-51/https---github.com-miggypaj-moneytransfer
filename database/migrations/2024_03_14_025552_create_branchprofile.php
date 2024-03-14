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
        Schema::create('branchprofile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('branch_name');
            $table->string('branch_code');
            $table->string('iso_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branchprofile');
    }
};
