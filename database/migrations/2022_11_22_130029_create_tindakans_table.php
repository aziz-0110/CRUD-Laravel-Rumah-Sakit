<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakans', function (Blueprint $table) {
            $table->id();
            $table->integer('No_Registrasi');
            $table->foreignId('ID_Perawat');
            $table->foreignId('ID_Pasien');
            $table->string('Jam');
            $table->string('Diagnosa');
            $table->string('Tindakan_Keperawatan');
            $table->integer('No_Ruangan');
            $table->string('Keterangan');
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
        Schema::dropIfExists('tindakans');
    }
};
