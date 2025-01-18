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
        Schema::create('pernyataans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rekredensialing_id');
            $table->date('tgl');
            $table->text('tanda_tangan');
            $table->timestamps();

            $table->foreign('rekredensialing_id')->references('id')->on('rekredensialings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pernyataans');
    }
};
