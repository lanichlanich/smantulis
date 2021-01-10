<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkKbmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_kbms', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->date('tgl_surat');
            $table->string('tapel');
            $table->string('semester');
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
        Schema::dropIfExists('sk_kbms');
    }
}
