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
            $table->integer('transaksi_master_id');
            $table->integer('item_id');
            $table->integer('user_id');
            $table->integer('qty');
            $table->integer('sub_price');
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
        Schema::dropIfExists('transaksi_pesans');
    }
};
