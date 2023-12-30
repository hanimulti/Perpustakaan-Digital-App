<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_t', function (Blueprint $table) {
            $table->id();
            $table->string('no_peminjaman')->unique();
            $table->unsignedBigInteger('books_id');
            $table->unsignedBigInteger('pengunjung_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('books_id')->references('id')->on('books'); // Replace 'books' with your actual table name
            $table->foreign('pengunjung_id')->references('id')->on('pengunjung'); // Replace 'pengunjung' with your actual table name
            $table->foreign('pegawai_id')->references('id')->on('pegawai'); // Replace 'pegawai' with your actual table name
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_t');
    }
}