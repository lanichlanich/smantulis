<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk');
            $table->string('nip')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('tpt_lahir');
            $table->date('tgl_lahir');
            $table->string('ibu')->nullable();
            $table->string('jenis_ptk');
            $table->string('status_ptk');
            $table->string('foto');
            $table->string('nik')->unique();
            $table->string('kk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('suami_istri')->nullable();
            $table->string('anak1')->nullable();
            $table->string('anak2')->nullable();
            $table->string('anak3')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('bpjs')->nullable();
            $table->string('npwp')->nullable();
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
        Schema::dropIfExists('pegawais');
    }
}
