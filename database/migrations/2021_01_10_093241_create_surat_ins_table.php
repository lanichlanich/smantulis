<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_ins', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->date('tgl_surat');
            $table->string('perihal');
            $table->string('pengirim');
            $table->text('keterangan');
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
        Schema::dropIfExists('surat_ins');
    }
}
