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
        Schema::create('header_perawatans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('kategori_perawatan_id');
            $table->timestamps();

            $table->foreign('kategori_perawatan_id')->references('id')->on('kategori_perawatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_perawatans');
    }
};
