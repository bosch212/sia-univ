<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kd_mkul', 5);
            $table->string('nama_mkul', 30);
            $table->string('kd_dosen', 5);
            $table->time('jam');
            $table->string('ruang_kelas', 7);
            $table->integer('jumlah_mhs');
            $table->date('tanggal_mulai');
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
        Schema::dropIfExists('jadwal_kuliah');
    }
}
