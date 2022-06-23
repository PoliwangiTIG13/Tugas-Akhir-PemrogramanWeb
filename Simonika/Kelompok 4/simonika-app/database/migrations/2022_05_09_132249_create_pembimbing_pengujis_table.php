<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembimbing_pengujis', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan', 100);
            $table->enum('status', ['acc', 'rej']);
            $table->integer('nilaiSempro');
            $table->integer('nilaiAkhir');
            $table->foreignId('posisi_id');
            $table->foreignId('proyekAkhir_id');
            $table->foreignId('dosen_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembimbing_pengujis');
    }
};