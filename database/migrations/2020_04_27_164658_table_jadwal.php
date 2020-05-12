<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_jadwal', function (Blueprint $table) {
            $table->increments('id_jadwal');
            $table->integer('lokasi');
            $table->string('tahap_audit');
            $table->string('ruang_lingkup');
            $table->string('auditi');
            $table->string('wakil_auditi');
            $table->string('auditor_ketua');
            $table->string('auditor_anggota');
            $table->string('lead_auditor');
            $table->date('tgl_audit');
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
        Schema::dropIfExists('table_jadwal');
    }
}
