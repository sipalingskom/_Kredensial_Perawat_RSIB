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
        Schema::create('kredensials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('isi_sub_header_perawatan_id');
            $table->enum('diminta', ['0','1']);
            $table->enum('rekomendasi_m', ['0','1']);
            $table->enum('rekomendasi_ds', ['0','1']);
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('isi_sub_header_perawatan_id')->references('id')->on('isi_sub_header_perawatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kredensials');
    }
};
