<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerlengkapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perlengkapan', function (Blueprint $table) {
            $table->increments('perlengkapan_id');
            $table->string('nama_perlengkapan',200);
            $table->string('gambar',200);
            $table->text('keterangan');
            $table->text('jumlah');
            $table->string('filter',4);
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
        Schema::dropIfExists('perlengkapan');
    }
}
