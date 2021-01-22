<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkNonPnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_non_pns', function (Blueprint $table) {
            $table->id();
            $table->string('nama_non_pns');
            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->string('tmt_sk');
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
        Schema::dropIfExists('sk_non_pns');
    }
}
