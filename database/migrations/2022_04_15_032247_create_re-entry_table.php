<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('re_entry', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');   
            $table->string('nama');
            $table->string('nim');
            $table->string('angkatan');
            $table->string('prodi');
            $table->text('keperluan');
            $table->string('asal');
            $table->date('tanggal');
            $table->string('status')->default('Menunggu');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('re_entry');
    }
}
