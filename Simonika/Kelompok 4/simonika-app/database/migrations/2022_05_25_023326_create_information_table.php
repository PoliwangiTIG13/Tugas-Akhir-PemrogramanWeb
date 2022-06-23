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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20)->unique();
            // $table->string('slug')->unique();
            $table->string('nama', 50);
            $table->string('judulPA', 255);
            $table->string('nilai', 20);
            $table->foreignId('result_id');
            $table->foreignId('category_id');
            $table->foreignId('dosenone_id');
            $table->foreignId('dosentwo_id');
            $table->foreignId('dosenthird_id');
            $table->foreignId('dosenfour_id');
            // $table->foreignId('dosen_id');
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
        Schema::dropIfExists('information');
    }
};
