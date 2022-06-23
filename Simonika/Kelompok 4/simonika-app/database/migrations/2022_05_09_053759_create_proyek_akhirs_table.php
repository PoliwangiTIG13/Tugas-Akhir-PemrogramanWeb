<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_akhirs', function (Blueprint $table) {
            $table->id();
            $table->string('judulPA', 255);
            $table->foreignId('kategori_id');
            $table->integer('status');
            $table->integer('nilaiSempro');
            $table->integer('nilaiAkhir');
            $table->string('tahunAkademikPengajuan', 10);
            $table->foreignId('mahasiswa_id');
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
        Schema::dropIfExists('proyek_akhirs');
    }
};