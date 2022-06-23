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
        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->enum('jenisUjian', ['Sempro', 'Semhas']);
            $table->string('draft', 100);
            $table->string('dokumenTambahan', 100);
            $table->date('tanggalUjian');
            $table->string('waktuUjian', 45);
            $table->foreignId('proyekAkhir_id');
            $table->foreignId('ruangan_id');
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
        Schema::dropIfExists('ujians');
    }
};