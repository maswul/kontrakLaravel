<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TmbhColKePekerjaans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pekerjaans', function (Blueprint $table) {
            //
            $table->string('pekerjaan_diawasi')->nullable();
            //$table->string('pekerjaan_diawasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pekerjaans', function (Blueprint $table) {
            //
        });
    }
}
