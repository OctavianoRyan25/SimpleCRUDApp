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
        Schema::create('lapor_desas', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_kegiatan');
            $table->string('penanggung_jawab');
            $table->date('tanggal');
            $table->text('hasil_kegiatan');
            $table->string('kendala');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapor_desas');
    }
};
