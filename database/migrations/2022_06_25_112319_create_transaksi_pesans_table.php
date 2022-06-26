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
        Schema::create('transaksi_pesans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_master_id')->unsigned();
            $table->foreignId('item_id')->unsigned();
            $table->foreignId('user_id')->unsigned();
            $table->integer('qty');
            $table->integer('sub_price');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('transaksi_pesans');
    }
};
