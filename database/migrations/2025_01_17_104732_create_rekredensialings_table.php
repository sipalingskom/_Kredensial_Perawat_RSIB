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
        Schema::create('rekredensialings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik', 16);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('str', 50);
            $table->string('ijzah', 50);
            $table->string('institusi');
            $table->date('tgl_lulus');
            $table->string('pendidikan');
            $table->unsignedBigInteger('status_rekredensial_id');
            $table->timestamps();

            $table->foreign('status_rekredensial_id')->references('id')->on('status_rekredensials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekredensialings');
    }
};
