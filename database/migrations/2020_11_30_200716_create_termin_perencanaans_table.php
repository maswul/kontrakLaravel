<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminPerencanaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termin_perencanaans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("termin_tgl_1")->nullable();
            $table->date("termin_tgl_2")->nullable();
            $table->string("termin_no_2")->nullable();
            $table->date("termin_tgl_3")->nullable();
            $table->date("termin_tgl_4")->nullable();
            $table->date("termin_tgl_5")->nullable();
            $table->string("termin_no_5")->nullable();
            $table->date("termin_tgl_6")->nullable();
            $table->string("termin_no_6")->nullable();
            $table->date("termin_tgl_7")->nullable();
            $table->string("termin_no_7")->nullable();
            $table->date("termin_tgl_8")->nullable();
            $table->string("termin_no_8")->nullable();
            $table->date("termin_tgl_9")->nullable();
            $table->string("termin_no_9")->nullable();
            $table->integer("pekerjaan_id")->unique();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termin_perencanaans');
    }
}
