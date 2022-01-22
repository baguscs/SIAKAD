<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('struktur_id')->nullable();
            $table->string('nama');
            $table->string('nip')->unique()->nullable();
            $table->string('alamat');
            $table->string('ttg');
            $table->string('telpon');
            $table->string('foto');
            $table->string('tamat');
            $table->string('tugas');
            $table->string('sejak');
            $table->string('identitas')->unique()->nullable();
            $table->string('akses')->nullable();
            $table->timestamps();

            $table->foreign('struktur_id')->references('id')->on('strukturs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
}
