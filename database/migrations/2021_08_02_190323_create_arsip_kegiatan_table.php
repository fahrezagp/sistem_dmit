<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('mitra',10000)->nullable();
            $table->string('kegiatan',1000);
            $table->string('seksi',20);
            $table->string('tahun',10);
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
        Schema::dropIfExists('arsip_kegiatan');
    }
}
