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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->string('nidn', 10);
            $table->string('nama', 45);
            $table->string('telepon', 30);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('keahlian', 45);
            $table->string('username', 45);
            $table->string('password');
            $table->foreignId('userRole_id');
            $table->foreignId('proyekDosen_id');
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
        Schema::dropIfExists('dosens');
    }
};