<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('symbol_id')->default(0);
            $table->bigInteger('price')->default(0);
            $table->bigInteger('max_price')->default(0);
            $table->bigInteger('min_price')->default(0);
            $table->boolean('volume')->default(0);
            $table->boolean('high_price')->default(0);
            $table->boolean('hour_high_price')->default(0);
            $table->boolean('day_high_price')->default(0);
            $table->boolean('week_high_price')->default(0);
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
        Schema::dropIfExists('positions');
    }
}
