<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->integer('perusahaan_id'); //data perusahaan
            $table->string('program');
            $table->string('kegiatan');
            $table->string('pekerjaan');

            $table->year('tahun');
            $table->string('kode_rek')->default('5 2 2 21 02');
            $table->string('kode_keg')->default('10335003');
            $table->string('dpa_skpd')->default('914/207.P/203.2/2020 Tanggal 12 Oktober 2020');

            //masalah duit
            $table->integer('hps');
            $table->integer('penawaran');
            $table->integer('nego');
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
        Schema::dropIfExists('pekerjaans');
    }
}
