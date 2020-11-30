<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelangs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //lelang
            $table->date('tgl_0')->nullable();

            $table->date('tgl_1')->nullable();
            $table->string('no_1')->nullable();
            $table->date('tgl_2')->nullable();
            $table->string('no_2')->nullable();
            $table->date('tgl_3')->nullable();
            $table->string('no_3')->nullable();
            $table->date('tgl_4')->nullable();
            $table->string('no_4')->nullable();
            $table->date('tgl_5')->nullable();
            $table->string('no_5')->nullable();
            $table->date('tgl_6')->nullable();
            $table->string('no_6')->nullable();
            $table->date('tgl_7')->nullable();
            $table->string('no_7')->nullable();
            $table->date('tgl_8')->nullable();
            $table->string('no_8')->nullable();
            $table->date('tgl_9')->nullable();
            $table->string('no_9')->nullable();
            $table->date('tgl_10')->nullable();
            $table->string('no_10')->nullable();
            $table->date('tgl_11')->nullable();
            $table->string('no_11')->nullable();
            $table->date('tgl_12')->nullable();
            $table->string('no_12')->nullable();
            $table->date('tgl_13')->nullable();
            $table->string('no_13')->nullable();
            $table->date('tgl_14')->nullable();
            $table->string('no_14')->nullable();
            $table->date('tgl_15')->nullable();
            $table->string('no_15')->nullable();

            $table->date('tgl_16')->nullable();

            $table->date('tgl_17')->nullable();
            $table->string('no_17')->nullable();
            $table->date('tgl_18')->nullable();
            $table->string('no_18')->nullable();

            $table->date('tgl_19')->nullable();
            $table->integer('pekerjaan_id')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lelangs');
    }
}
