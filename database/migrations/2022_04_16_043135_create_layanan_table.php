<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('layanan', function(Blueprint $table) {
            $table->increments('layanan_id');
            $table->string('nama');
            $table->string('nik');
            $table->string('angkatan');
            $table->string('prodi');
            $table->date('tanggal');
            $table->string('nohp');
            $table->string('value1');
            $table->string('value2');
            $table->string('value3');
            $table->string('value4');
            $table->string('value5');
            $table->string('value6');
            $table->string('fileswab');
            $table->string('filepersetujuan');
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
        Schema::dropIfExists('layanan');
    }
}
