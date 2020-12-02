<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChgColumnToPerusahaans extends Migration
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
            $table->string('notaris')->nullable()->change();
            $table->string('notaris_tanggal')->nullable()->change();
            $table->string('notaris_no')->nullable()->change();
            $table->string('perubahan_notaris')->nullable()->change();
            $table->string('perubahan_notaris_tanggal')->nullable()->change();
            $table->string('perubahan_notaris_no')->nullable()->change();
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
