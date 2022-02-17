<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20)->unsigned();;
            $table->string('nama', 200);
            $table->string('alamat', 300)->nullable();
            $table->string('kelurahan_id', 10);
            $table->string('kecamatan_id', 10);
            $table->string('pendidikan', 30)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->string('bank', 30)->nullable();
            $table->string('no_rek', 50)->nullable();
            
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
        Schema::dropIfExists('mitra');
    }
}
