<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sapi_id');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('no_hp');
            $table->string('email');
            $table->text('alamat_lengkap');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->integer('kode_pos');
            $table->enum('status', ['DIPROSES', 'SELESAI', 'GAGAL']);
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
        Schema::dropIfExists('transaksis');
    }
}
