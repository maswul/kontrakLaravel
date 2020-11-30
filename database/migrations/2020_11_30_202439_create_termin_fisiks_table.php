<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminFisiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termin_fisiks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tgl_1")->nullable();
            $table->string("tgl_2")->nullable();
            $table->string("tgl_3")->nullable();
            $table->string("no_3")->nullable();
            $table->string("tgl_4")->nullable();
            $table->string("no_4")->nullable();
            $table->string("tgl_5")->nullable();
            $table->string("no_5")->nullable();
            $table->string("tgl_6")->nullable();
            $table->string("no_6")->nullable();
            $table->string("tgl_7")->nullable();
            $table->string("no_7")->nullable();
            $table->string("tgl_8")->nullable();
            $table->string("no_8")->nullable();
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
        Schema::dropIfExists('termin_fisiks');
    }
}