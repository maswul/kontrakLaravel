<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPerusahaans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perusahaans', function (Blueprint $table) {
            //
            $table->string('notaris');
            $table->string('notaris_tanggal');
            $table->string('notaris_no');
            $table->string('perubahan_notaris');
            $table->string('perubahan_notaris_tanggal');
            $table->string('perubahan_notaris_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perusahaans', function (Blueprint $table) {
            //
        });
    }
}
