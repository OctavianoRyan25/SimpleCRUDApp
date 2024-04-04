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
        Schema::create('lapor_kelahirans', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nomor_kk');
            $table->integer('anak_ke');
            $table->string('jenis_kelamin');
            $table->time('jam_lahir');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->foreignId('ayah_id');
            $table->foreignId('ibu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapor_kelahirans');
    }
};
