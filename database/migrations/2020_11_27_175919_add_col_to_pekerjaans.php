<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColToPekerjaans extends Migration
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
            $table->integer('tipe')->default(1)->after('pekerjaan'); // -- 1 = konsultan; 2 = fisik
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
