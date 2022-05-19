<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangkamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangkamar', function (Blueprint $table) {
            $table->increments('ruangkamar_id');
            $table->unsignedBigInteger('re_entry_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_asrama',200);
            $table->string('nomor_kamar',200);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('re_entry_id')->references('id')->on('re_entry');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruangkamar');
    }
}
