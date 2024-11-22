<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('symbol_id')->default(0);
            $table->string('key')->nullable();
            $table->bigInteger('dominance')->nullable();
            $table->integer('rank')->nullable();
            $table->double('atl')->nullable();
            $table->double('volume_24h')->nullable();
            $table->double('market_cap')->nullable();
            $table->double('ath')->nullable();
            $table->double('ath_change_percentage')->nullable();
            $table->string('ath_date')->nullable();
            $table->double('price')->nullable();
            $table->double('daily_high_price')->nullable();
            $table->double('daily_low_price')->nullable();
            $table->double('monthly_high_price')->nullable();
            $table->double('weekly_high_price')->nullable();
            $table->double('weekly_low_price')->nullable();
            $table->double('percent_change_1h')->nullable();
            $table->double('percent_change_24h')->nullable();
            $table->double('percent_change_7d')->nullable();
            $table->double('percent_change_14d')->nullable();
            $table->double('percent_change_30d')->nullable();
            $table->double('percent_change_60d')->nullable();
            $table->double('percent_change_200d')->nullable();
            $table->double('percent_change_1y')->nullable();
            $table->double('price_change_24h')->nullable();
            $table->double('price_change_7d')->nullable();
            $table->double('price_change_14d')->nullable();
            $table->double('max_supply')->nullable();
            $table->double('total_supply')->nullable();
            $table->double('circulating_supply')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('stats');
    }
}
