<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymbolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symbols', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->string('faName')->nullable();
            $table->string('baseAsset')->nullable();
            $table->string('quoteAsset')->nullable();
            $table->integer('baseAssetPrecision')->nullable();
            $table->boolean('isNew')->default(0);
            $table->boolean('isZeroFee')->default(0);
            $table->integer('stepSize')->nullable();
            $table->integer('tickSize')->nullable();
            $table->integer('minQty')->nullable();
            $table->integer('maxQty')->nullable();
            $table->integer('minNotional')->nullable();
            $table->double('bidPrice')->nullable();
            $table->double('bidVolume')->nullable();
            $table->integer('bidCount')->nullable();
            $table->double('askPrice')->nullable();
            $table->double('askVolume')->nullable();
            $table->integer('askCount')->nullable();
            $table->integer('daily_ch')->nullable();
            $table->double('daily_volume')->nullable();
            $table->double('daily_quoteVolume')->nullable();
            $table->double('daily_highPrice')->nullable();
            $table->double('daily_lowPrice')->nullable();
            $table->integer('weekly_ch')->nullable();
            $table->double('weekly_volume')->nullable();
            $table->double('lastPrice')->nullable();
            $table->double('lastQty')->nullable();
            $table->string('lastTradeSide')->nullable();
            $table->string('direction_buy')->nullable();
            $table->string('direction_sell')->nullable();
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
        Schema::dropIfExists('symbols');
    }
}
