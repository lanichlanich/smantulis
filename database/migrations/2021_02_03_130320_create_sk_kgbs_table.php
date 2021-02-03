<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkKgbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_kgbs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pns');
            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->date('tmt_sk');
            $table->date('kgb_yad');
            $table->string('golongan');
            $table->string('masa_kerja');
            $table->integer('gaji_pokok');
            $table->string('softfile');
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
        Schema::dropIfExists('sk_kgbs');
    }
}
