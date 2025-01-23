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
        Schema::create('persyaratan_rekredensialing', function (Blueprint $table) {
            $table->unsignedBigInteger('persyaratan_id');
            $table->unsignedBigInteger('rekredensialing_id');

            $table->foreign('persyaratan_id')->references('id')->on('persyaratans')->onDelete('cascade');
            $table->foreign('rekredensialing_id')->references('id')->on('rekredensialings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persyaratan_rekredensialing');
    }
};
