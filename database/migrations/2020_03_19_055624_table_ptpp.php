<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePtpp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ptpp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prodi');
            $table->string('no_ptpp');
            $table->string('hasil_temuan');
            $table->string('deskripsi_kondisi');
            $table->string('akar_masalah');
            $table->string('kriteria');
            $table->string('akibat_resiko');
            $table->string('rencana_perbaikan');
            $table->string('tanggapan_audit');
            $table->string('rekomendasi');
            $table->string('jadwal_perbaikan');
            $table->string('pj_perbaikan');
            $table->string('rencana_pencegahan');
            $table->string('jadwal_pencegahan');
            $table->string('pj_pencegahan');
            $table->string('status');
            $table->string('tgl_audit');
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
        Schema::dropIfExists('table_ptpp');
    }
}
