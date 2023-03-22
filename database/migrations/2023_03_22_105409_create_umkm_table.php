<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')
            ->on('users');
            $table->string('nama_umkm');
            $table->string('profil_url');
            $table->string('gambar_umkm');
            $table->string('detail_umkm');
            $table->string('alamat_umkm');
            $table->string('motto_umkm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umkm');
    }
}
