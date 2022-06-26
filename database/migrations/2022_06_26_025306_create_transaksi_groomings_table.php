<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_groomings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_master_id');
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal');
            $table->time('jam');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('transaksi_master_id')->references('id')->on('transaksi_masters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_groomings');
    }
};
