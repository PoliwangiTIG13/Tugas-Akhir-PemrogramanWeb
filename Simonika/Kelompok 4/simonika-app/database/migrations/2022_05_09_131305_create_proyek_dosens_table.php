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
        Schema::create('proyek_dosens', function (Blueprint $table) {
            $table->id();
            $table->string('topik', 100);
            $table->string('deskripsi', 255);
            $table->integer('kebutuhan');
            $table->foreignId('dosen_id');
            $table->foreignId('kategoriPA_id');
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
        Schema::dropIfExists('proyek_dosens');
    }
};